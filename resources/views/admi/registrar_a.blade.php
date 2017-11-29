

@extends('template.plantilla')

@section('content')
</div>
<div class="col-lg-6">
<table><tr><td>
  <IMG SRC="imajen/am.png" ></IMG>
</td><td>


  </div></td></tr></table>
</div>

 <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                   <h3><center><b>  REGISTRO DE AMBIENTE</b></center></h3>
                                  </header>
                                  <div class="panel-body">
                             

 <form action="{{route('ambiente.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  

  <div class="form-group" > {{--Col--}} 
   

    <div class="form-group">
      <label class="control-label col-sm-4">Nombre Ambiente:</label>
      <div class="col-sm-6">
        <div class="input-prepend">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre del ambiente"  required></div>
      </div>
    </div>
<b><h4><center>Capacidad  Del Ambiente</center> </h4></b> 
   
<div class="form-group">
      <label class="control-label col-sm-4">Solo Personas</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="personas" placeholder="descripcion de mabiente "  onkeyup="poner(this.form)" required>
      </div>
    </div>  
    <div class="form-group">
       <label class="control-label col-sm-4">Solo Sillas:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="sillasc" placeholder="numero de habitantes"  required>
      </div>
    </div>

    
    <div class="form-group">
      <label class="control-label col-sm-4">Mesas y sillas:</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="mesasc" placeholder="descripcion de mabiente "  onkeyup="poner(this.form)" required>
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-4"><h6>Numero de Enchufes </h6></label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="enchufesc" placeholder="descripcion de mabiente "  onkeyup="poner(this.form)" required>
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