<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//si osi copiar esta parte
use Validator;
use Redirect;
use Session;
// nombre del modelo a usar
use App\Mascota;

class MascotaController extends Controller
{
   
 public function index()
    {
        $mascota=Mascota::all();
        return view('admin.pages.paciente_lista',compact('mascota'));
    }

     public function create()
    {
        return view('formularios.registrar_m',compact('mascota'));
    }
  
   public function store(Request $request)

    {
        //dd($request->all());
         $rules = array(
           'especie'               => 'required',
           'nombre'             => 'required|min:3',
           'iddueño'             => 'required',
          'genero'                  =>'required',
          'edadaños'          =>'required',

          'edadmeses'                 => 'required|min:3',
          'peso'     => 'required|min:3',
          'color'               => 'required',
          'raza'             => 'required|min:3',
          'esterelizado'             => 'required|min:2',
          'procedencia'             => 'required|min:3',
           'foto'                  =>'required|min:3',
         
            );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
            $mascota = new Mascota;
            $mascota->especie          =$request->input("especie");
             $mascota->nombre   =$request->input("nombre");
            $mascota->iddueño           =$request->input("iddueño");
            $mascota->genero          =$request->input("genero");
           $mascota->edadaños           =$request->input("edadaños");
           $mascota->edadmeses        =$request->input("edadmeses");
           $mascota->peso          =$request->input("peso");
           $mascota->color           =$request->input("color");
           $mascota->raza           =$request->input("raza");
           $mascota->esterilizado           =$request->input("esterelizado");
           $mascota->procedencia           =$request->input("procedencia");
          $mascota->foto      =$request->input("foto");
        
            $mascota->save();
            Session::flash("success", "Mascota".$macota->mascota." creado correctamente" );
            return redirect("/");
        }
    }
}
