
@extends('template.plantilla')

@section('content')

 
<form action="{{route('mueble.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  <input type="hidden" name="id_am"  value="{{$ambiente->id}}" />
  

  <div class="form-group" > {{--Col--}}
  <center> 
  <b><h5>REGISTRO DE MUEBLE {{$ambiente->Nombre}} </h5></b>  
</center>
    <div class="form-group">
      <label class="control-label col-sm-8 " for="apaterno">Nombre:</label>
      <div class="col-sm-18">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre del Mueble" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-12 " for="amaterno">Descripcion:</label>
      <div class="col-sm-18">
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"  required>
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