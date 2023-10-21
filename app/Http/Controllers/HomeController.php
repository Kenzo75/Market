<?php

namespace App\Http\Controllers;

use App\Models\market;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tambah(){
        return view('produk.tambah');
    }

    public function simpan(Request $request){
        $simpan = new market();
        if($request->hasFile('fotoproduk')){
            $request->file('fotoproduk')->move('fotoproduk/', $request->file('fotoproduk')->getClientOriginalName());
            $simpan->fotoproduk = $request->file('fotoproduk')->getClientOriginalName();
            $simpan->namaproduk = $request->nama;
            $simpan->jumlahproduk = $request->jumlah;
            $simpan->descproduk = $request->desc;
            $simpan->save();
            Alert::success('Berhasil', 'Berhasil Menyimpan');
            return redirect()->route('home');
        }
    }

    public function hapus($id){
        market::findOrFail($id)->delete();
        Alert::success('Berhasil', 'Berhasil Mengahpus data');
        return redirect()->route('home');
    }

    public function ubah($id){
        $data = market::findOrFail($id);
        return view('produk.ubah')->with([
            'data' => $data
        ]);
    }

    public function ubahproses(Request $request, $id){
        $simpan = market::findOrFail($id);
        if($request->hasFile('fotoproduk')){
            $request->file('fotoproduk')->move('fotoproduk/', $request->file('fotoproduk')->getClientOriginalName());
            $simpan->fotoproduk = $request->file('fotoproduk')->getClientOriginalName();
            $simpan->namaproduk = $request->nama;
            $simpan->jumlahproduk = $request->jumlah;
            $simpan->descproduk = $request->desc;
            $simpan->save();
            Alert::success('Berhasil', 'Berhasil Menyimpan');
            return redirect()->route('home');
        }
    }

    public function index()
    {
        return view('home')->with([
            'datas' => market::all()
        ]);
    }
}
