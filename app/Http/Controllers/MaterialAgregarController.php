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

class MaterialAgregarController extends Controller
{
     public function create($id)
    {
        $material=Material::find($id);
        $ambiente = Ambiente::where('id',$material->id_ambiente)->first();
        $mueble = Mueble::where('id',$material->id_mueble)->first();   
        return view('admi.materialcomp',compact('material','mueble','ambiente'));
    }


      public function store(Request $request)

    {
        //dd($request->all());
      
            $mueble = new Material;
            //$mueble->id_ambiente      =$request->input("id_ambiente");
            $mueble->Nombre         =$request->input("Nombre");
            $mueble->color          =$request->input("color");
            $mueble->tipo           =$request->input("tipo");
            $mueble->tamano         =$request->input("tamano"); 
            $mueble->tipoob         =$request->input("tipoob");
            $mueble->precio         =$request->input("precio");
            //$mueble->origenc        =$request->input("origenc"); 
            $mueble->fecha_ob       =$request->input("fecha_ob");
            $mueble->cantidad       =$request->input("cantidad");
            $mueble->evaluado       =$request->input("evaluado");
            $mueble->donante        =$request->input("donante");
            $mueble->fabricante     =$request->input("fabricante");
            $mueble->id_mueble      =$request->input("id_mueble");
            $mueble->id_ambiente    =$request->input("id_ambiente");
            $mueble->id_componentes =$request->input("id_componentes");



            $mueble->save();
            $mueble->cod_ma=$mueble->Nombre.$mueble->id;
            $mueble->save();
            Session::flash('message', 'Se importo correctamente'); 
            return redirect("ambiente/{$mueble->id_ambiente}/informacion");
        
    }
}
