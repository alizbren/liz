

@extends('template.plantilla')

@section('content')
<div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                   <h3><center><b>  EDITANDO DATOS DE AMBIENTE</b></center></h3>
                                  </header>
                                  <div class="panel-body">

<form action="/ambiente/{{$ambiente->id}}" method="post">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  <input name="_method" type="hidden" value="PUT">
  

  <div class="form-group" > {{--Col--}}   

    <div class="form-group">
      <label class="control-label col-sm-4">Nombre Ambiente:</label>
      <div class="col-sm-6">
        <div class="input-prepend">
        <input type="text" class="form-control" name="Nombre"  value="{{$ambiente->Nombre}}"  required></div>
      </div>
    </div>
<b><h4><center><BR><BR>Capacidad  Del Ambiente</center> </h4></b> 
    
 <div class="form-group">
      <label class="control-label col-sm-4">Solo Personas</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="personas" value="{{$ambiente->personasc}}" required>
      </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-4">Solo Sillas:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="sillasc" value="{{$ambiente->sillasc}}"  required>
      </div>
    </div>

     
    <div class="form-group">
      <label class="control-label col-sm-4">Mesas y sillas:</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="mesasc" value="{{$ambiente->mesasc}}">
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-4"><h6>Numero de Enchufes </h6></label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="enchufesc" value="{{$ambiente->enchufesc}}">
      </div>
    </div>  

    
  </div> {{--End Col--}}

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-floppy-disk"></span>
        Guardar</button>
      </div>
    </div>
    
  </form></div></section>
@stop