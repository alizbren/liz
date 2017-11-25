
@extends('admin.master')
@section('content')
<br>
<br><br><br><br><br><br><br>


<form action="{{route('dueno.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  

  <div class="form-group" > {{--Col--}}

     <div class="form-group">
      <label class="control-label col-sm-2 " for="nombres">Nombres:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="nombres" placeholder="Nombres"  required>
      </div>
     </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="apaterno">Apellido Paterno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno"  required>
      </div>
    </div>
   

 <div class="form-group">
      <label class="control-label col-sm-2 " for="amaterno">Apellido Materno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno"  required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2 " for="ci">C.I.:</label>
      <div class="col-sm-3">
        <input type="String" class="form-control" name="ci" placeholder="ci"  required>
        <select name="expedido">
            <option value="1">La Paz</option> 
            <option value="2">Oruro</option> 
            <option value="3">Potosi</option>
            <option value="4">SantaCruz</option>
            <option value="5">Sucre</option> 
            <option value="6">Tarija</option> 
            <option value="7">Cochabamba</option> 
            <option value="8">Pando</option> 
            <option value="9">Beni</option> 
        </select>
      </div>
    </div>
   

     <div class="form-group">
      <label class="control-label col-sm-2 " for="fechanac">Fecha de Nacimiento:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" name="fechanac"   min="1867-12-30" max="1999-01-01" value="1993-03-18"  required>



      </div>
    </div>

     <div class="form-group">
     Introduce tu edad (min=18 max=99, campo obligatorio)
      <label class="control-label col-sm-2 " for="edad">Edad:</label>
      <div class="col-sm-3">    
        <input type="integer" class="form-control" name="edad" min="18" max="99" step="18"  required>
      </div>
    </div>

//<?php 
  //  if ($_POST['edad'])
    //echo "la edad recibida es: " .$_POST['edad'];
//?>

     <div class="form-group">
      <label class="control-label col-sm-2 " for="correoe">Correo Electroncio:</label>
      <div class="col-sm-3">
        <input type="mail" class="form-control" name="correoe" placeholder="ejemplo@correo.com"  required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2 " for="telefono">Telefono:</label>
      <div class="col-sm-3">
        <input type="integer" class="form-control" name="telefono" placeholder="Telefono" >
      </div>
    </div>

 <div class="form-group">
      <label class="control-label col-sm-2 " for="correoe">Celular:</label>
      <div class="col-sm-3">
        <input type="integer" class="form-control" name="celular" placeholder="Celular"  required>
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-2 " for="apaterno">Ocupacion:</label>
      <div class="col-sm-3">
       <select name="ocupacion">
   <option value="1">Estudiante</option> 
        <option value="2">Profesional</option> 
   <option value="3">Otro</option>
</select></div>
    </div>

    

 


  </div> {{--End Col--}}

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-floppy-disk"></span>
        Guardar</button>
      </div>
    </div>
    
  </form>
