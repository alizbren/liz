<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Redirect;
use Session;

use \App\User;

class MensajeController extends Controller
{
	 public function index()
    {
        $usuario=User::all();
        return view('admi.usuario',compact('usuario'));
        //return view('eventos.calendario',compact('ambiente'));
    }
     public function index2()
    {
        $usuario=User::all();
        return view('admi.registrar_m',compact('usuario'));
        //return view('eventos.calendario',compact('ambiente'));
    }

    
}
