<?php 

namespace App\Http\Controllers;
use App\Produk;

class ProdukController extends controller{
	function index(){
		$data['list_produk'] = Produk::all();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk= new Produk;
		$produk-> nama = request('nama');
		$produk-> berat = request('harga');
		$produk-> harga = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with ('success', 'Data Berhasil Ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data)->with ('success', 'Data Berhasil di edit');
	}
	function update(Produk $produk){
		$produk-> nama = request('nama');
		$produk-> berat = request('harga');
		$produk-> harga = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with ('success', 'Data Berhasil di update');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with ('success', 'Data Berhasil dihapus');

		
	}
}