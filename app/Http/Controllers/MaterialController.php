<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Redirect;
use Session;

use \App\Ambiente;
use \App\Mueble;
use \App\Material;


class MaterialController extends Controller
{

	  public function index()
    {
        $mueble=Mueble::all();
        $ambiente=Ambiente::all();


        return view('admi.muebleg',compact('mueble'));
        //return view('eventos.calendario',compact('ambiente'));
    }
    public function create($id)
    {
        $mueble=Mueble::find($id);   
        return view('admi.registrar_ma',compact('material','mueble'));
    }


      public function store(Request $request)

    {
        //dd($request->all());
      
            $mueble = new Material;
            $mueble->id_ambiente      =$request->input("id_ambiente");
            $mueble->nombre           =$request->input("Nombre");
            $mueble->descripcion      =$request->input("descripcion");                 
            $mueble->save();
            \Session::flash('message', 'Se importo correctamente'); 
            \Session::flash('alert-success', 'alert-warning'); 
             return redirect("ambiente");
        
    }
}
 