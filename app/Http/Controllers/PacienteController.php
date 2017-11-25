<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use Redirect;
use Session;
use App\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente=Paciente::all();
        return view('admin.pages.paciente_lista',compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.paciente_crear',compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        //dd($request->all());
         $rules = array(
            'nombre'               => 'required',
            'apaterno'             => 'required',
           // 'amaterno'             => 'required|min:3',
           // 'ci'                   => 'required|min:3',
           // 'fecha_nacimiento'     => 'required|min:3',
            
           // 'Estado_civil'         => 'required|min:3',
           // 'telefono'             => 'required|min:3',
            );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
            $paciente = new Paciente;
            //$paciente->cd_p               =$request->input("cd_p");
            $paciente->nombre             =$request->input("nombre");
            $paciente->apaterno           =$request->input("apaterno");
            $paciente->amaterno           =$request->input("amaterno");
            $paciente->ci                 =$request->input("ci");
            $paciente->fecha_nacimiento   =$request->input("fecha_nacimiento");
           
            $paciente->Estado_civil       =$request->input("Estado_civil");
            $paciente->telefono           =$request->input("telefono");
           
            
            $paciente->save();
            Session::flash("success", "Paciente".$paciente->paciente." creado correctamente" );
            return redirect()->route('paciente.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
