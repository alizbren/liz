@extends('admin.master')
@section('content')

<br>
<br><br><br><br><br><br><br>


<form action="{{route('mascota.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  

  <div class="form-group" > {{--Col--}}

  <div class="form-group">
      <label class="control-label col-sm-2 " for="especie">Especie:</label>
      <div class="col-sm-3">
        <select name="ocupacion">
   <option value="1">Canino (Perro)</option> 
        <option value="2">Felino (Gato)</option> 
   <option value="3">Otro</option>
</select></div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-2 " for="nombre">Nombre de la Mascota:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre de la mascota"  required>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2 " for="apaterno">C.I. Dueño:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="iddueno" placeholder="C.I. del Dueño"  required>
      </div>
    </div>
   

 <div class="form-group">
      <label class="control-label col-sm-2 " for="genero">Genero de la mascota:</label>
      <div class="col-sm-3">
        <select name="ocupacion">
   		<option value="1">Macho </option> 
        <option value="2">Hembra</option> 
   
</select></div>
    </div>

   


     <div class="form-group">
     Introduce tu edad (min=18 max=99, campo obligatorio)
      <label class="control-label col-sm-2 " for="edadaños">Edad en Años:</label>
      <div class="col-sm-3">    
        <input type="integer" class="form-control" name="edad" min="18" max="99" step="18"  required>
      </div>
    </div>

       <div class="form-group">
      <label class="control-label col-sm-2 " for="edadmeses">Edad en Meses:</label>
      <div class="col-sm-3">
        <input type="integer" class="form-control" name="edadmeses" placeholder="edad en meses" >
      </div>
    </div>

//<?php 
  //  if ($_POST['edad'])
    //echo "la edad recibida es: " .$_POST['edad'];
//?>

     <div class="form-group">
     introduce el peso de la mascota en kilos
      <label class="control-label col-sm-2 " for="peso">Peso:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="peso" placeholder="peso en kilos"  required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2 " for="genero">Raza de la mascota:</label>
      <div class="col-sm-3">
            <select name="webmenu" id="webmenu" onchange="showValue(this.value)">
   
   <option data-img-src="img1/Alaskan Malamute.jpg">Alaskan Malamute</option>

  </select>
   
		</div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2 " for="telefono">Telefono:</label>
      <div class="col-sm-3">
        <input type="intege" class="form-control" name="telefono" placeholder="Telefono" >
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

    
<div class="form-group">

 	<label class="contol-label col-sm-2" for="foto"></label>

<label class="contol-label col-sm-2" for="foto">Imagen1:</label>
 	<div class="col-sm-3">
 
	 <input name="archivo1" type="file" id="archivo1" placeholder="Subir imagen de la mascota" requerid>
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
    
  </form>

<script src="jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/chosen.jquery.js" type="text/javascript"></script>
<script src="js/ImageSelect.jquery.js" type="text/javascript"></script>