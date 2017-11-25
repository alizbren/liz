@extends('template.plantilla')

@section('content')

INFORMACION DE AMBIENTE {{$ambiente->Nombre}} <button type="button" class="btn btn-default btn-sm">
    <span class="glyphicon glyphicon-star"></span> atras
  </button>

<ul class="nav nav-tabs">
  <li class="nav-item active">
    <a data-toggle="pill" class="nav-link active "  href="#home">INFORMACION</a>
  </li>
  <li class="nav-item">
    <a  data-toggle="pill" class="nav-link" href="#menu1">LISTADO MUEBLES</a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" class="nav-link" href="#home">LISTADO DE MATERIALES</a>
  </li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  xxxx
  </div>
    <div id="menu1" class="tab-pane fade">
      <table><tr><td>
    <b> <h3>Listado de Muebles</h3></b>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
  <table  id="mitabla" class="display" cellspacing="0" width="100%">
    <thead class="thead-inverse">
      <tr>
        <th><h6><b>Nonbre</b></h6></th>
        <th>Descripcion</th>
        <th>Editar</th>
        <th>mover</th>
        <th>Eliminar</th>
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($mueble as $s)
      <tr>
        <td class="top_margin">{{$s->Nombre}}</td>
        <td class="top_margin">{{$s->descripcion}}</td>
      <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Editar
    </button>
  </p>
</form>
        </td>
  <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/informacion" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Mover
    </button>
  </p>
</form></td><td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/informacion" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Eliminar
    </button>
  </p>
</form></td>
        
    </tr>
    @endforeach
  </tbody>
</table>
  </div>

</td></tr></table></div></div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>



<script type="text/javascript">
  $(document).ready(function() {
    $('#mitabla').DataTable();
  } );
</script>

@stop