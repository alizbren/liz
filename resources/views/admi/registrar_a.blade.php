

@extends('template.plantilla')

@section('content')
 <table><tr><td><IMG SRC="imajen/am.png" ></IMG></td><td></td><td>
<form action="{{route('ambiente.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  

  <div class="form-group" > {{--Col--}} 
  <b><h4>REGISTRO DE AMBIENTES </h4></b>  

    <div class="form-group">
      <label class="control-label col-sm-8 " for="apaterno">Nombre Ambiente:</label>
      <div class="col-sm-18">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre del ambiente" onkeyup="poner(this.form)" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-12 " for="amaterno">Cantidad de habitantes:</label>
      <div class="col-sm-18">
        <input type="text" class="form-control" name="cantidada" placeholder="numero de habitantes"  required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-12" for="ci">Descripcion:</label>
      <div class="col-sm-18">
        <input type="textarea" class="form-control" name="descripcion" placeholder="descripcion de mabiente "  onkeyup="poner(this.form)" required>
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
    
  </form></td></tr></table>
@endsection