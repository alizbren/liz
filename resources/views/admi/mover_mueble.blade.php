

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
                                  
                                   <h3><center><b>  MOVER  MUEBLE</b></center></h3>
                                 
                                  </header> 
                                  <div class="panel-body">
                             

 

  <div class="form-group" > {{--Col--}} 
   
   
  <b><h5>Codigo: {{$mueble->cod_m}} <br>  Ambiente actual :  {{$ambiente1->cod_am}}</b></h5>
   
   <br><h4>Mover mueble al Ambiente :</h4>
   
   

   <table  id="mitabla" class="display" cellspacing="0" width="100%">
    <thead class="thead-inverse">
      <tr>
        <th><h6><b>Codigo</b></h6></th>
        <th>Nombre</th>
        <th>Mover</th>
        
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($ambiente as $s)
      <tr>
        <td class="top_margin">{{$s->cod_am}}</td>
        <td class="top_margin">{{$s->Nombre}}</td>
      <td class="top_margin">
<form action="/Mueblemover/{{$mueble->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  <input name="_method" type="hidden" value="PUT">
  <input name="id_am" type="hidden" value="{{$s->id}}">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <B>  <span class="glyphicon glyphicon-plus"></span><B>MOVER</B>
    </button>
  </p>
</form>
        </td>
 
        
    </tr>
    @endforeach
  </tbody>
</table>
    
    
    
    
  </div> {{--End Col--}}

  
    
  
<script type="text/javascript">
function poner(frm) {
  ///var ci1 = ci.toString(); 
  input.value = input.toUpperCase(); 
  
}
///generador de cod user segun ap/am/fechan


</script>

@endsection