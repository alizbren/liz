

@extends('template.plantilla')

@section('content')
<form action="/ambiente/{{$ambiente->id}}" method="post">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  

  <div class="form-group" > {{--Col--}}   

    <div class="form-group">
      <label class="control-label col-sm-2 " for="apaterno">Nombre Ambiente:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="Nombre" value="{{$ambiente->Nombre}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-5 " for="amaterno">Cantidad de habitantes:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="cantidada" value="{{$ambiente->cantidada}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ci">Descripcion:</label>
      <div class="col-sm-3">
        <input type="textarea" class="form-control" name="descripcion" value="{{$ambiente->descripcion}}" required>
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
@stop