<?php 
namespace App\Http\Controllers;

class AuthController extends Controller{
		function showLogin(){
		return view('login');
	}
	function showRegister(){
		return view('register');
	}
}