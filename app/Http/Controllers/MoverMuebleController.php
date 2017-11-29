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

class MoverMuebleController extends Controller
{
      public function edit($id)
    {
        $mueble=Mueble::find($id); 
        $ambiente=Ambiente::all();
        $ambiente1 = Ambiente::where('id',$mueble->id_am)->first(); 
        //$ambientea=Ambiente::where('id',$mueble->id_am) ; 
        return view('admi.mover_mueble',compact('ambiente','mueble','ambiente1'));
    }
     public function update(Request $request, $id)
    {
         $mueble=Mueble::find($id);
         $material=Material::all();
         //$material = Material::where('id_ambiente',$mueble->id_am)->first();
        for($i=0; $i<count($material); $i++) 
    { if($material[$i]->id_mueble==$id )

        {$material[$i]->id_ambiente=$request->input("id_am");
          $material[$i]->save();
         }
    }
         $mueble->id_am            =$request->input("id_am");
         $mueble->save();
          
      return redirect("ambiente/{$mueble->id_am}/informacion");
    }

}
