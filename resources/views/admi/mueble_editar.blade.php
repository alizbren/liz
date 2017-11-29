

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
                                  
                                   <h3><center><b>  EDITAR  DE MUEBLE</b></center></h3>
                                   {{$ambiente->cod_am}}
                                  </header> 
                                  <div class="panel-body">
                             

 <form action="/mueble/{{$mueble->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  <input name="_method" type="hidden" value="PUT">
  <input name="cod_m" type="hidden" value="">
  <div class="form-group" > {{--Col--}} 
   
   
  
    <div class="form-group">
      <label class="control-label col-sm-4">Nombre Mueble:</label>
      <div class="col-sm-6">
        <div class="input-prepend">
        <input type="text" class="form-control" name="Nombre" value="{{$mueble->Nombre}}"  required></div>
      </div>
    </div>
   
<div class="form-group">
      <label class="control-label col-sm-4">Color</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="color" value="{{$mueble->color}}" required>
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