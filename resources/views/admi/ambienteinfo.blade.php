@extends('template.plantilla')

@section('content') 
<style type="text/css">
  
  .contenedor-modal {
  position: absolute;
  width: 100%;
  height: 100%;
  text-align: center;
}

.contenedor-modal button {
  position: relative;
  top: 40%;
}
</style>





<cemter><b><h3>INFORMACION DE AMBIENTE {{$ambiente->cod_am}}</h3></b></cemter>
 <form action="/ambiente" method="GET">
    <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>ATRAS
    </button>
  </p>
</form>

<ul class="nav nav-tabs">
  <li class="nav-item active">
    <a data-toggle="pill" class="nav-link active "  href="#home">INFORMACION</a>
  </li>
  <li class="nav-item">
    <a  data-toggle="pill" class="nav-link" href="#menu1">LISTADO MUEBLES</a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" class="nav-link" href="#menu3">LISTADO DE MATERIALES</a>
  </li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
<br><br> <table align="center" width="800"><tr><td>
  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                             Propiedades de ambiente <b>{{$ambiente->Nombre}}</b>
                          </header>
                          <ul class="list-group">
                              
                              <li class="list-group-item"><center>Descripcion de sus capacidades</center></li>
                              <li class="list-group-item">Capacidad de solo Personas: {{$ambiente->personasc}}</li>
                              <li class="list-group-item">Capacidad de solo sillas: {{$ambiente->sillasc}}</li>
                              <li class="list-group-item">Capacidad De mesas y sillas: {{$ambiente->mesasc}}</li>
                              <li class="list-group-item">Capacidad de Entradas de Enchufes: {{$ambiente->enchufesc}}</li>
                          </ul>
                      </section>
                  </div></td></tr></table>
  </div>
    <div id="menu1" class="tab-pane fade">
      <table><tr><td>
    <b> <h3>Listado de Muebles</h3></b>
</td><td>
<td> 
<form action="{{url('/ambiente')}}/{{$ambiente->id}}/Mueblecrear" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-success btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Nuevo Mueble
    </button>
  </p>
</form></td>
</tr></table>
<table class="table" align="center" border="0"><tr><td>
<div class="table-responsive" align="center">
  <table  id="mitabla" class="display" cellspacing="0" width="70%">
    <thead class="thead-inverse">
      <tr>
        <th><h6><b>Codigo</b></h6></th>
        <th>Nombre</th>
        <th>Editar</th>
        <th>Informe</th>
        <th>Mover</th>
        <th>Adicionar Material</th>
        <th>Eliminar</th>
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($mueble as $s)
      <tr>
        <td class="top_margin">{{$s->cod_m}}</td>
        <td class="top_margin">{{$s->Nombre}}</td>
      <td class="top_margin">
 <form action="{{url('/mueble')}}/{{$s->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <b>  <span class="glyphicon glyphicon-plus"></span>Editar</b>
    </button>
  </p>
</form>
        </td>
<td class="top_margin">
 <form action="{{url('/muebleInfo')}}/{{$s->id}}" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
      <b><span class="glyphicon glyphicon-plus"></span>Informacion</b>
    </button>
  </p>
</form>
        </td>
  <td class="top_margin">
 <form action="{{url('/Mueblemover')}}/{{$s->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
      <b>  <span class="glyphicon glyphicon-plus"></span>Mover</b>
    </button>
  </p></form></td><td>
  <form action="{{url('/mueble')}}/{{$s->id}}/Materialcrear" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-success btn-xs" data-title="Agregar">
     <span class="glyphicon glyphicon-plus"></span><b>Nuevo Material</b>
    </button>
  </p>
</form>
</td>
<td class="top_margin">
     <form action="/mueble/{{$s->id}}" method="post">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
        <input type="hidden" name="_method" value="DELETE" />      
        <button  class="btn btn-danger btn-xs">Eliminar</button>
      </form></td>
        
    </tr>
    @endforeach
  </tbody>
</table>
  </div>

</td></tr></table></div><div id="menu3" class="tab-pane fade">
      <table><tr><td>
    <b> <h3>Listado de Materiales</h3></b>
</td><td>
<td> 
</td>
</tr></table>
<table class="table" align="center" border="0"><tr><td>
<div class="table-responsive" align="center">
  <table  id="mitabla" class="display" cellspacing="0" width="70%">
    <thead class="thead-inverse">
      <tr>
        <th><h6><b>Codigo </b></h6></th>
        <th>Nombre</th>
        <th>Editar</th>
        <th>Informe</th>
        <th>Mover</th>
        <th>Eliminar</th>
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($material as $m)
      <tr>
        <td class="top_margin">{{$m->cod_ma}}</td>
        <td class="top_margin">{{$m->Nombre}}</td>
      <td class="top_margin">
 <form action="{{url('/mueble')}}/{{$m->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <b><span class="glyphicon glyphicon-plus"></span>Editar</b>
    </button>
  </p>
</form>
        </td>
<td class="top_margin">
 <form action="{{url('/muebleInfo')}}/{{$m->id}}" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
      <b> <span class="glyphicon glyphicon-plus"></span>Informacion</b>
    </button>
  </p>
</form>
        </td>
  <td class="top_margin">
 <form action="{{url('/Mueblemover')}}/{{$m->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
      <b><span class="glyphicon glyphicon-plus"></span>Mover</b>
    </button>
  </p>
</form></td>
     <td>
      <form action="/material/{{$m->id}}" method="post">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
        <input type="hidden" name="_method" value="DELETE" />         
        <button class="btn btn-danger btn-xs">Eliminar</button>
      </form>
    </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
  </div>

</td></tr></table></div>



<script type="text/javascript">
  $(document).ready(function() {
    $('#mitabla').DataTable();
  } );
</script>

@stop