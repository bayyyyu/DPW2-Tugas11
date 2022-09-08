<?php

namespace App\Http\Controllers\WebControllers;
use App\Models\Produk;

class IndexClientController extends Controller{
    function index(){
        $data ['list_produk'] = Produk::all();
        return view('indexClient.index', $data);
    }

     function store(){
        $admin_produk = new produk;
        $admin_produk->nama = request('nama');
        $admin_produk->harga = request('harga');
        $admin_produk->berat = request('berat');
        $admin_produk->deskripsi = request('deskripsi');
        $admin_produk->stok = request('stok');
        $admin_produk->save();
        return redirect('indexClient');
    }

    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('indexClient.show', $data);
    }

    function filter()
  {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

    return view('indexClient.index', $data);
  }

    function showKategori(){
        return view('category');
    }
}
