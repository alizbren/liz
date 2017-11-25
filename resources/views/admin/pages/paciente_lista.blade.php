@extends('admin.master')
@section('content')
<form action={{route('paciente.create')}} method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-success btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>Nuevo
    </button>
  </p>
</form>

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Aalledo Paterno</th>
        <th>Apellido Materno</th>
        <th>CI</th>
        <th>Edad</th>
        <th>Estado Civil</th>
        <th>telefono</th>
        <th>Editar</th>
        <th>Historial</th>
        <th>eliminar</th>
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($dueno as $s)
      <tr>
        <td class="top_margin">{{$s->cd_p}}</td>
        <td class="top_margin">{{$s->nombres}}</td>
        <td class="top_margin">{{$s->apaterno}}</td>
        <td class="top_margin">{{$s->amaterno}}</td>
        <td class="top_margin">{{$s->ci}}</td>
        <td class="top_margin">{{$s->edad}}</td>
        
        <td class="top_margin">{{$s->telefono}}</td>
        <td class="top_margin">
          

        <td class="top_margin">
          
      </td>
      <td class="top_margin">
         
          </p>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop