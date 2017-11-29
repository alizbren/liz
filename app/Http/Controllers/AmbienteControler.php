<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use Redirect;
use Session;

use \App\Ambiente;
use  \App\Mueble;
use  \App\Material;

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

    {       $ambiente = new Ambiente;
            $ambiente->Nombre          =$request->input("Nombre");
            $ambiente->sillasc         =$request->input("sillasc");
            $ambiente->mesasc          =$request->input("mesasc");
            $ambiente->enchufesc       =$request->input("enchufesc");
            $ambiente->personasc        =$request->input("personas");
                    
            $ambiente->save();
            $ambiente->cod_am=$ambiente->Nombre.$ambiente->id;
            $ambiente->save();
            Session::flash("success", "Mascota".$ambiente->ambiente." creado correctamente" );
            return redirect("ambiente");
        
    }
   public function edit($id)
    {
        $ambiente = Ambiente::find($id);
        return view('admi.ambiente_editar',compact('ambiente'));
    }
     public function update(Request $request, $id)
    {
       
            $ambiente = Ambiente::find($id);
            $ambiente->Nombre          =$request->get("Nombre");
            $ambiente->sillasc         =$request->get("sillasc");
            $ambiente->mesasc          =$request->get("mesasc");
            $ambiente->enchufesc       =$request->get("enchufesc");
            $ambiente->personasc        =$request->get("personas");
                    
            $ambiente->save();
            $ambiente->cod_am=$ambiente->Nombre.$ambiente->id;
            $ambiente->save();
            Session::flash("success", "Mascota".$ambiente->ambiente." creado correctamente" );
            return redirect("ambiente");
        
    }
       public function destroy($id)
    { 
      $ambiente = Ambiente::find($id);
      $material=Material::all();
      $mueble=Mueble::all();

    for($i=0; $i<count($material); $i++) 
    { if($material[$i]->id_ambiente==$id )

        {$m[$i] = Material::where('id_ambiente','=',$id)->first();
         $m[$i]->delete();
         }
    }
     for($i=0; $i<count($mueble); $i++) 
    { if($mueble[$i]->id_am==$id )

        {$mu[$i] = Mueble::where('id_am',$id)->first();
         $mu[$i]->delete();
         }
    }

        Ambiente::destroy($id);
        return redirect()->route('ambiente.index');
    }
}


