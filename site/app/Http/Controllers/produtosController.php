<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController  extends Controller
{
	public function lojavirtual(){
		return view('lojavirtual');
	}
	public function produto(){
		return view('produto');
	}
}
