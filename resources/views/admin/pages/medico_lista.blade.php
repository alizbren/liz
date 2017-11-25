@extends('admin.master')
@section('content')
<form action={{route('medico.create')}} method="get">
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
        <th>C.I.</th>
        <th>Espesialidad</th>
        <th>Telefonos</th>
        <th>Emails</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach ($medico as $s)
      <tr>
        <td class="top_margin">{{$s->cd_m}}</td>
        <td class="top_margin">{{$s->nombre}}</td>
        <td class="top_margin">{{$s->apaterno}}</td>
        <td class="top_margin">{{$s->amaterno}}</td>
        <td class="top_margin">{{$s->ci}}</td>
        <td class="top_margin">{{$s->especialidad}}</td>
        <td class="top_margin">{{$s->telefono1}}<br>{{$s->telefono2}}</td>
        <td class="top_margin">{{$s->email1}}<br>{{$s->email2}}</td>
        <td class="top_margin">
          <form action="{{url('/medico')}}/{{$s->cd_m}}/edit" method="GET">
            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit">
              <button class="btn btn-primary btn-xs" data-title="Edit">
                <span class="glyphicon glyphicon-pencil"></span>
              </button>
            </p>
          </form>
        </td>
        <td class="top_margin">
          <form action="/medico/{{$s->cd_m}}" method="POST" id="form_delete">
           <input type="hidden" name="_method" value="DELETE">
           <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />

           <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Borrar">
            <button id="delete" class="btn btn-danger btn-xs" data-title="Borrar">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </p>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop