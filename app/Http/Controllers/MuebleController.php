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

        return view('admi.materiales_listar',compact('mueble','ambiente'));
        //return view('eventos.calendario',compact('ambiente'));
    }

     public function ambiente($id)
    {
        $ambiente=Ambiente::find($id);
        $mueble = Mueble::where('id_am',$ambiente->id)->get();
        $material = Material::where('id_ambiente',$ambiente->id)->get();
        return view('admi.ambienteinfo',compact('ambiente','mueble','material'));
        
    }
     public function informacionm($id)
    {
      
        $mueble=Mueble::find($id);
        $material = Material::where('id_mueble',$mueble->id)->get();
        $ambiente = Ambiente::where('id',$mueble->id_am)->first();
        return view('admi.muebleinfo',compact('material','mueble','ambiente'));
        
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
            $mueble->Nombre           =$request->input("Nombre");
            //$mueble->descripcion      =$request->input("descripcion");
            $mueble->color            =$request->input("color");
            $mueble->descripcion      =$request->input("tipo");                 
            $mueble->save();
            $mueble->cod_m=$mueble->Nombre.$mueble->id;
            $mueble->save();
            Session::flash("success", "mueble".$mueble->mueble." creado correctamente" );
            return redirect("ambiente/{$mueble->id_am}/informacion");
        
    }
     public function edit($id)
    {
        
        $mueble = Mueble::find($id);
        $ambiente = Ambiente::where('id',$mueble->id_am)->first();
        return view('admi.mueble_editar',compact('ambiente','mueble'));
    }
     public function update(Request $request, $id)
    {
       
            $mueble = Mueble::find($id);
            //$mueble->id_am            =$request->input("id_am");
            $mueble->cod_m            ==$request->input("cod_m");
            $mueble->Nombre           =$request->input("Nombre");
            $mueble->descripcion      =$request->input("descripcion");
            $mueble->color            =$request->input("color");                 
            $mueble->save();
            $mueble->cod_m=$mueble->Nombre.$mueble->id;
            $mueble->save();

            Session::flash("success", "mueble".$mueble->mueble." creado correctamente" );
             //return redirect()->route('');
            return redirect("ambiente/{$mueble->id_am}/informacion");
        
    }
      public function destroy($id)
    {
         
         $mueble = Mueble::find($id);
         $material=Material::all();
         for($i=0; $i<count($material); $i++) 
         { if($material[$i]->id_mueble==$id )

        {$m[$i] = Material::where('id_mueble',$id)->first();
         $m[$i]->delete();
         }

        $mueble->delete();
    }
        return redirect()->route('ambiente.index');
    }
   

}

