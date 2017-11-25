@extends('admin.master')
@section('content')
<form action="/paciente/{{$paciente->cd_p}}" method="post" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  <input type="hidden" name="_method" value="PUT" />  

  <div class="col-md-6" > {{--Col--}}

   
 <label class="control-label col-sm-2" for="cd_p" >Codigo Paciente </label>
 <div class="col-sm-3">
     <input type="text" name="cd_p" id="cd_p" readonly class="form-control" value="{{$paciente->cd_p}}">
        </div>
  </div>

    <div class="form-group">         
      <label class="control-label col-sm-2" for="nombre" >Nombre:</label>
      <div class="col-sm-3">
        <input type="textarea" class="form-control" name="nombre" placeholder="Nombre" value="{{$paciente->nombre}}"  onkeyup="poner(this.form)" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="apaterno">Apellido Paterno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" value="{{$paciente->apaterno}}" onkeyup="poner(this.form)" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="amaterno">Apellido Materno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" onkeyup="poner(this.form)" value="{{$paciente->amaterno}}" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ci">C.I:</label>
      <div class="col-sm-3">
        <input type="textarea" class="form-control" name="ci" placeholder="C.I"  onkeyup="poner(this.form)" value="{{$paciente->ci}}" required>
      </div>
    </div>  

    <div class="form-group">
      <label class="control-label col-sm-2" for="fecha_nacimiento">Fecha de Nacimineto:</label>
      <div class="col-sm-3">
        <input type="date" name="fecha_nacimiento" step="1" min="1900-01-01" class="form-control" max="2300-12-31" value="2013-01-01"  placeholder="fecha_nacimiento" value="{{$paciente->fecha_nacimiento}}"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="edad">Edad:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="edad" placeholder="edad"  value="{{$paciente->edad}}" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Estado_civil">Estado Civil:</label>
      <div class="col-sm-3">
        <select type="textarea" class="form-control" name="Estado_civil" placeholder="Estado_civil" value="{{$paciente->Estado_civil}}" required>
            <option>Soltera
            <option>Casada
            <option>Divorciada
            <option>Viuda
      </select>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefono">Telefono:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="telefono" placeholder="Telefono"  value="{{$paciente->telefono}}">
      </div>
    </div>   
    
    
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-floppy-disk"></span>
        Guardar</button>
      </div>
    </div>

   
  </div> {{--End Col--}}

  
  
    
  </form>
  <script type="text/javascript">
function poner(frm) {
  ///var ci1 = ci.toString(); 
  frm.cd_m.value = frm.nombre.value.substr(0,1) + frm.apaterno.value.substr(0,1) + frm.amaterno.value.substr(0,1)+ frm.ci.value  ; 
  
}
///generador de cod user segun ap/am/fechan


</script>
@stop