@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ route('tambah') }}" class="btn btn-primary">Tambah Produk</a></div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Foto Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Deskripsi</th>
                            <th>Data</th>
                        </tr>
                        @foreach ($datas as $data)
                        <tr>
                            <td><img src="{{ asset('fotoproduk/'.$data->fotoproduk) }}" alt="" style="width: 250px;"></td>
                            <td>{{ $data->namaproduk }}</td>
                            <td>{{ $data->jumlahproduk }}</td>
                            <td>{{ $data->descproduk }}</td>
                            <td>
                                <a href="{{ route('ubah',['id'=>$data->id]) }}" class="btn btn-primary">Ubah</a>
                                <a href="{{ route('hapus',['id'=>$data->id]) }}" class="btn btn-danger">Hapus</a>

                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
