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

class MuebleController extends Controller
{
     public function index()
    {
        $mueble=Mueble::all();
        $ambiente=Ambiente::all();

        return view('admi.muebleg',compact('mueble'));
        //return view('eventos.calendario',compact('ambiente'));
    }

     public function ambiente($id)
    {
        //$mueble=Mueble::find($id);
        $ambiente=Ambiente::find($id);
        //$mueble=Mueble::all();
        $mueble = Mueble::where('id_am',$id)->get();
        return view('admi.ambienteinfo',compact('ambiente','mueble'));
        //return view('eventos.calendario',compact('ambiente'));
    }
     
     public function create($id)
    {
        $ambiente=Ambiente::find($id);   
        return view('admi.registrar_m',compact('ambiente','mueble'));
    }
    public function store(Request $request)

    {
        //dd($request->all());
      
            $mueble = new Mueble;
            $mueble->id_am            =$request->input("id_am");
            $mueble->nombre           =$request->input("Nombre");
            $mueble->descripcion      =$request->input("descripcion");                 
            $mueble->save();
            Session::flash("success", "mueble".$mueble->mueble." creado correctamente" );
            return redirect("ambiente");
        
    }
}

