<?php 

namespace App\Http\Controllers;
use App\user;

class UserController extends controller{
	function index(){
		$data['list_user'] = user::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user= new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user->save();

		return redirect('user')->with ('success', 'Data Berhasil Ditambahkan');
	}
	function show(user $produk){
		$data['user'] = $produk;
		return view('user.show', $data);
	}
	function edit(user $produk){
		$data['user'] = $produk;
		return view('user.edit', $data)->with ('warning', 'Data Berhasil di edit');
	}
	function update(user $produk){
		$user= new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user->save();

		return redirect('user')->with ('success', 'Data Berhasil di update');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with ('denger', 'Data Berhasil dihapus');

		
	}
}