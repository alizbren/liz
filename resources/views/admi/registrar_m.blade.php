

@extends('template.plantilla')

@section('content')
</div>
<div class="col-lg-6">
<table><tr><td>
  <IMG SRC="/imajen/am.png" ></IMG>
</td><td>


  </div></td></tr></table>
</div>

 <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                   <h3><center><b> CREAR MUEBLE </b></center></h3>
                                   Cod Ambiente : {{$ambiente->cod_am}}
                                  </header>
                                  <div class="panel-body">
                             

 <form action="{{route('mueble.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  
<input type="hidden" name="id_am"  value="" />
  <div class="form-group" > {{--Col--}} 
   
   <input type="hidden" name="id_am" value="{{$ambiente->id}}" />
   <input type="hidden" name="tipo" value="" />

  
    <div class="form-group">
      <label class="control-label col-sm-4">Nombre:</label>
      <div class="col-sm-6">
        <div class="input-prepend">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre del ambiente"  required></div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4">Color</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="color" placeholder="color de mueble " required>
      </div>
    </div>  
   
<div class="form-group">
      <label class="control-label col-sm-4">Descripcion</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="tipo" placeholder="color de mueble " required>
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


                                  </div>
                             
</section></div>
<script type="text/javascript">
function poner(frm) {
  ///var ci1 = ci.toString(); 
  input.value = input.toUpperCase(); 
  
}
///generador de cod user segun ap/am/fechan


</script>

@endsection