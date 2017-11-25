@extends('template.plantilla')
@section('content')

<ul class="nav nav-tabs">
  <li class="nav-item active">
    <a data-toggle="pill" class="nav-link active "  href="#home">AMBIENTES</a>
  </li>
  <li class="nav-item">
    <a  data-toggle="pill" class="nav-link" href="#home">LISTADO DE AMBIENTES</a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" class="nav-link" href="#menu2">Link</a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" class="nav-link" href="#home">Disabled</a>
  </li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   <table class="table" align="center" border="0"><tr><td>
<b> <h3>Listado de Ambientes  </h3></b>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td> 
<form action="crearA" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-success btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Nuevo Ambiente
    </button>
  </p>
</form></td>
</tr></table>
<table class="table" align="center" border="0"><tr><td>
<div class="table-responsive" align="center">
  <table  id="mitabla" class="display" cellspacing="0" width="100%">
    <thead class="thead-inverse">
      <tr>
        <th><h6><b>Nonbre Ambiente</b></h6></th>
        <th>Capacidad</th>
        <th>Editar</th>
        <th>Informacion</th>
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($ambiente as $s)
      <tr>
        <td class="top_margin">{{$s->Nombre}}</td>
        <td class="top_margin">{{$s->cantidada}}</td>
      <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Editar
    </button>
  </p>
</form>
        </td>
  <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/informacion" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Informacion">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Informacion
    </button>
  </p>
</form>
        
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</td><td>
  <IMG SRC="imajen/am.png" width="300" height="300" ></IMG>
</td></tr></tbody></table>
  </div>
    <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#mitabla').DataTable();
  } );
</script>
@stop