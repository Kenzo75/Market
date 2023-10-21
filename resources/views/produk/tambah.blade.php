@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Produk</div>

                <div class="card-body">
                    <a href="{{ route('home') }}" class="btn btn-danger">Kembali</a>
                    <br>
                    <form method="POST" action="{{ route('simpan') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="fotoproduk" placeholder="Masukan Foto Produk">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Produk">
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" min="1" name="jumlah" placeholder="Masukan Jumlah Produk">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="desc" placeholder="Masukan Deskripsi Produk">
                        </div>
                        <input type="submit" value="simpan" class="btn btn-success w-100 mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
