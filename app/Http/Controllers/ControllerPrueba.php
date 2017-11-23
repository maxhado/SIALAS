<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

class ControllerPrueba extends Controller
{
    public function  mostrar(){
    	$Personal = Personal::orderBy('id')->get();
    	dd($Personal);
    	//return view('pruebas')->with('personal',$Personal->first());
    }
}
