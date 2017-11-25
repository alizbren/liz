<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalendarioController extends Controller
{
     public function index()
    {
        //$ambiente=Ambiente::all();
        //return view('admi.ambiente_listar',compact('ambiente'));
        return view('eventos.calendario',compact(''));
    }
    public function listar_eventos()
    {
        //$ambiente=Ambiente::all();
        //return view('admi.ambiente_listar',compact('ambiente'));
        return view('eventos.listar_eventos',compact(''));
    }

}
