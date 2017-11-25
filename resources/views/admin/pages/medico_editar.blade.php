@extends('admin.master')
@section('content')

<form action="/medico/{{$medico->cd_m}}" method="post" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  <input type="hidden" name="_method" value="PUT" />  


  <div class="col-md-20" > {{--Col--}}
    <div class="form-group"> 
 <label class="control-label col-sm-2" for="cd_m" >Codigo Medico </label>
 <div class="col-sm-3">
  <input type="text" name="cd_m" id="cd_m" readonly value="{{$medico->cd_m}}" class="form-control" >
    </div>
  </div>

    <div class="form-group">      
      <label class="control-label col-sm-2" for="nombre" >Nombre:</label>
      <div class="col-sm-3">
        <input type="textarea" class="form-control" name="nombre" placeholder="Nombre" onkeyup="poner(this.form)" required value="{{$medico->nombre}}" >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="apaterno">Apellido Paterno:</label>
      <div class="col-sm-3">
        <input   type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" onkeyup="poner(this.form)" required value="{{$medico->apaterno}}">
      </div >
    </div  >

    <div class="form-group">
      <label class="control-label col-sm-2" for="amaterno">Apellido Materno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" onkeyup="poner(this.form)" required value="{{$medico->amaterno}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ci">C.I:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="ci" placeholder="C.I"  onkeyup="poner(this.form)" required value="{{$medico->ci}}">
      </div>
    </div>  

    <div class="form-group">
      <label class="control-label col-sm-2" for="especialidad">Especialidad:</label>
      <div class="col-sm-3">
        <select type="text" class="form-control" name="especialidad" placeholder="Especialidad" required value="{{$medico->especialidad}}"> 
            <option>Ginecologo</option>
            <option>Bioquimico</option>
            <option>laja</option>
            <option>palca</option>
      </select>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefono1">Telefono:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="telefono1" placeholder="Telefono" required value="{{$medico->telefono1}}">
      </div>
    </div>   
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefono2">Celular:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="telefono2" placeholder="Celular" required value="{{$medico->telefono2}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email1">Email1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="email1" placeholder="Correo" required value="{{$medico->email1}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email2">Email2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="email2" placeholder="correo2" required value="{{$medico->email2}}">
      </div>
    </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="rol">Privilegio:</label>
      <div class="checkbox">
       <label> <input type="radio" name="rol" value="Administrador"> Administrador </label>
       <label> <input type="radio" name="rol" value="Usuario">UsuarioA</label>
       <label> <input type="radio" name="rol" value="Usuario">UsuarioB</label>
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


<script type="text/javascript">
function poner(frm) {
  ///var ci1 = ci.toString(); 
  frm.cd_m.value = frm.nombre.value.substr(0,1) + frm.apaterno.value.substr(0,1) + frm.amaterno.value.substr(0,1)+ frm.ci.value  ; 
  frm.cd_m.value = cadena.toUpperCase();
}
///generador de cod user segun ap/am/fechan


</script>

  @stop