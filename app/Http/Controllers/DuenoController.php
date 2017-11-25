<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//si osi copiar esta parte
use Validator;
use Redirect;
use Session;
// nombre del modelo a usar
use App\Dueno;

class DuenoController extends Controller
{
   
 public function index()
    {
        $dueno=Dueno::all();
        return view('admin.pages.paciente_lista',compact('dueno'));
    }

     public function create()
    {
        return view('formularios.registrar_d',compact('dueno'));
    }
  
   public function store(Request $request)

    {
        //dd($request->all());
         $rules = array(
           'nombres'               => 'required',
           'apaterno'             => 'required|min:3',
           'amaterno'             => 'required',
          'ci'                  =>'required',
          'expedido'          =>'required',

          'edad'                 => 'required|min:3',
          'fecha_nacimiento'     => 'required|min:3',
          'correoe'               => 'required',
          'telefono'             => 'required|min:3',
          'celular'             => 'required|min:3',
          'ocupacion'             => 'required|min:3',
           //ona'                  =>'required|min:3',
          ///ipov'                 =>'requerid|min:3',         
        
            );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
            $dueno = new Dueno;
            $dueno->nombres          =$request->input("nombres");
             $dueno->expedido   =$request->input("expedido");
            $dueno->apaterno           =$request->input("apaterno");
                     $dueno->amaterno           =$request->input("amaterno");
           $dueno->ci           =$request->input("ci");
           $dueno->edad        =$request->input("edad");
           $dueno->fechanac          =$request->input("fechanac");
           $dueno->correoe           =$request->input("correoe");
           $dueno->telefono           =$request->input("telefono");
           $dueno->celular           =$request->input("celular");
           $dueno->ocupacion           =$request->input("ocupacion");
         //  $dueno->zona       =$request->input("zona");
           //$dueno->tipov       =$request->input("tipov");
            
            $dueno->save();
            Session::flash("success", "Dueño".$dueno->dueno." creado correctamente" );
            return redirect("/");
        }
    }
}
