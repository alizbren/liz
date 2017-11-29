@extends('template.plantilla')
@section('content')

<ul class="nav nav-tabs">
  <li class="nav-item active">
    <a data-toggle="pill" class="nav-link active "  href="#home">AMBIENTES</a>
  </li>
 

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   <table class="table" align="center" border="0"><tr><td>
<b> <h3>Listado de Ambientes  </h3></b>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td> 
<form action="crearA" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-success btn-xs" data-title="Agregar">
     <H5><B> <span class="glyphicon glyphicon-plus"></span>Nuevo Ambiente</B></H5>
    </button>
  </p>
</form></td>
</tr></table>
<table class="table" align="center" border="0"><tr><td>
<div class="table-responsive" align="center">
  <table  id="mitabla" class="display" cellspacing="0" width="100%">
    <thead class="thead-inverse">
      <tr>
        <th><h6><b>Codigo</b></h6></th>
        <th>Nombre</th>
        <th>Editar</th>
        <th>Informacion</th>
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($ambiente as $s)
      <tr>
        <td class="top_margin">{{$s->cod_am}}</td>
        <td class="top_margin">{{$s->Nombre}}</td>
      <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/edit" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <span class="glyphicon glyphicon-plus"><b></span>Editar</B>
    </button>
  </p>
</form>
        </td>
  <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/informacion" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Informacion">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
    <span class="glyphicon glyphicon-plus"><b></span>Informacion</B>
    </button>
  </p>
      </form></td>
<td>
        

<div class="contenedor-modal">
  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#miModal{{$s->id}}">Eliminar</button>
</div>

<div class="modal fade" id="miModal{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel{{$s->id}}"><b>Eliminando Ambiente</h4>
      </div>
      <div class="modal-body">
        Antes de elimar asegurese mover los muebles y materiales del Ambiente:
        {{$s->cod_am}}</b></h4> 
        <form action="/ambiente/{{$s->id}}" method="post">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
        <input type="hidden" name="_method" value="DELETE" />      
        <button  class="btn btn-danger btn-xs">Eliminar</button>
      </form>

      </div>
    </div>
  </div>
</div>


      </td>
        
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</td><td>
  <IMG SRC="imajen/am.png" width="300" height="300" ></IMG>
</td></tr></tbody></table>
  
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#mitabla').DataTable();
  } );
</script>
@stop