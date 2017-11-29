

@extends('template.plantilla')


@section('content')

 <form action="{{route('componente.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />

  <input type="hidden" name="id_mueble"  value="{{$mueble->id}}" />
  <input type="hidden" name="id_componentes"  value="{{$material->id}}" />
  <input type="hidden" name="id_ambiente"  value="{{$ambiente->id}}" />
  <input type="hidden" name="donante"  value="1" />
  <input type="hidden" name="fabricante"  value="1" />
  <input type="hidden" name="precio"  value="" />
  <input type="hidden" name="origenc"  value="1" />

</div>
<div class="col-lg-10">
  <section class="panel">
                                  <header class="panel-heading">
                                   <h3><center><b>  REGISTRO DE COMPONENTE DE MATERIAL</b></center></h3><b> Codigo ambiente: {{$ambiente->cod_am}}
                                   <br>Codigo Mueble: {{$mueble->cod_m}}
                                    <br>   Codigo Material: {{$material->cod_ma}}
                                 </b>
                                  </header>
                                  <div class="panel-body">
                             


  

  <div class="form-group" > {{--Col--}} 
   

    <div class="form-group">
      <label class="control-label col-sm-4">Nombre Material:</label>
      <div class="col-sm-6">
        <div class="input-prepend">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre del Material"  required></div>
      </div>
    </div> 
   
   <div class="form-group">
      <label class="control-label col-sm-4">Color</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="color" placeholder="Color del material "   required>
      </div>
    </div>  
    <div class="form-group">
       <label class="control-label col-sm-4">Tipo</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tipo" placeholder="Tipo de material"  required>
      </div>
    </div>

    
    <div class="form-group">
      <label class="control-label col-sm-4">Tamano:</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="tamano" placeholder="Dimenciones del Material "  required>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-4"><h6>Cantidad </h6></label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="cantidad" placeholder="descripcion de mabiente "   required>
      </div>
    </div>
    
      
 <br> 
    <b><center><h3><label>Tipos de optecion del material</label></h3></center></b>
<center>    
<label class="radio-inline"><input type="radio" name="tipoob" value="DONADO">DONADO</label>
<label class="radio-inline"><input type="radio" name="tipoob" value="DONADO">FABRICADO</label>
<label class="radio-inline"><input type="radio" name="tipoob" value="COMPRADO">COMPRADO</label>
  </center>  <ul class="nav nav-tabs">

 
 
  <li class="active"><a data-toggle="tab" href="#home">DONADO</a></li>
  <li><a data-toggle="tab" href="#menu1">FABRICADO</a></li>
  <li><a data-toggle="tab" href="#menu2">COMPRADO</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <div class="form-group">
      <label class="control-label col-sm-4">Nombre Donante</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="donante" value="donante"  onkeyup="poner(this.form)" required>
      </div>
    </div>  
  </div>
  <div id="menu1" class="tab-pane fade">
   <div class="form-group">
      <label class="control-label col-sm-4">Nombre Fabricantes</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="fabricante"  value="fabricante" onkeyup="poner(this.form)" required>
      </div>
    </div>  
  </div>
  <div id="menu2" class="tab-pane fade">
    <div class="form-group">
      <label class="control-label col-sm-4">Precio</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="precio" value="0"   onkeyup="poner(this.form)" required>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-4">Origen de compra/Direccion URL</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="origenc" value="Origen"  onkeyup="poner(this.form)" required>
      </div>
    </div>   
  </div>
</div>
 <br><br>  
</div>
<div class="form-group">
      <label class="control-label col-lg-3">Material Evaluado en bolivianos </label>
      <div class="col-lg-3">
        <input type="textarea" class="form-control" name="evaluado" placeholder="descripcion de mabiente "   required>
      </div>
      <label class="control-label col-lg-2">Fecha Obtencion </label>
      <div class="col-lg-3">
        <input type="Date" class="form-control" name="fecha_ob"  required>
      </div>
    </div> 

    

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-floppy-disk"></span>
        Guardar</button>
      </div>
    </div>
    
  </form>
                             
</section></div>
<script type="text/javascript">
function poner(frm) {
  ///var ci1 = ci.toString(); 
  input.value = input.toUpperCase(); 
  
}
///generador de cod user segun ap/am/fechan


</script>

@endsection