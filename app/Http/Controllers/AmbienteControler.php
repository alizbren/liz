<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use Redirect;
use Session;

use \App\Ambiente;

class AmbienteControler extends Controller
{
    
    public function index()
    {
        $ambiente=Ambiente::all();
        return view('admi.ambiente_listar',compact('ambiente'));
        //return view('eventos.calendario',compact('ambiente'));
    }
    public function index2()
    {
        $ambiente=Ambiente::all();
        return view('admi.registrar_a',compact('ambiente'));
    }

     public function create()
    {
        
        return view('admi.registrar_a',compact('ambiente'));
    }
    public function store(Request $request)

    {
        //dd($request->all());
         $rules = array(
           'Nombre'            => 'required',
           'descripcion'       => 'required|min:3',
           'cantidada'          =>'required',
     
                
            );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
            $ambiente = new Ambiente;
            $ambiente->Nombre           =$request->input("Nombre");
            $ambiente->descripcion      =$request->input("descripcion");
            $ambiente->cantidada         =$request->input("cantidada");
                   
            $ambiente->save();
            Session::flash("success", "Mascota".$ambiente->ambiente." creado correctamente" );
            return redirect("ambiente");
        }
    }
   public function edit($id)
    {
        $ambiente = Ambiente::find($id);
        return view('admi.ambiente_editar',compact('ambiente'));
    }
     public function update(Request $request, $id)
    {
       
            $ambiente = Ambiente::find($id);
            $ambiente->Nombre           =$request->get("Nombre");
            $ambiente->descripcion      =$request->get("descripcion");
            $ambiente->cantidada        =$request->get("cantidada");
                   
            $ambiente->save();
            Session::flash("success", "Ambiente".$ambiente->ambiente." creado correctamente" );
            return redirect("/");
        
    }
     public function destroy($id)
    {
        Ambiente::destroy($id);
        return redirect()->route('ambiente.index');
    }
}


