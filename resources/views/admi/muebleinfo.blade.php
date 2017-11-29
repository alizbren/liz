@extends('template.plantilla')

@section('content')
<cemter><b><h3>INFORMACION DE MUEBLE </h3></b></cemter>
 <form action="/ambiente/{{$mueble->id_am}}/informacion" method="GET">
    <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
      <span class="glyphicon glyphicon-plus"></span>ATRAS
    </button>
  </p>
</form>
<table align="center" width="600"><tr><td>
<div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <center> Mueble Caracteristicas</center>
                          </header>
                          <table class="table">
                             
                              <tbody>
                              <tr>
                                  <td>Nombre--> </td>
                                  <td>{{$mueble->Nombre}}</td>
                                  
                              </tr>
                              <tr>
                                  <td>Codigo:</td>
                                  <td>{{$mueble->cod_m}}</td>
                                  
                              </tr>
                              <tr>
                                  <td>Codigo Ambiente en el que se encuentra:</td>
                                  <td>{{$ambiente->cod_am}}
                                  
                                  
                              </tr>
                              <tr>
                                  <td>Color:</td>
                                  <td>{{$mueble->color}}</td>
                                  
                              </tr>
                             
                              </tbody>
                          </table>
                      </section>
                  </div>
                  </td></tr></table>

                  <center><h4><b>Listado De materiales que contiene el mueble</b></h4></center>


<div class="table-responsive" align="center">
  <table  id="mitabla" class="display" cellspacing="0" width="70%">
    <thead class="thead-inverse">
      <tr>
        <th> Codigo </th>
        <th> Nombre </th>
        <th> Agregar Componente </th>
        <th> Informacion </th>
        
        

      </tr>
    </thead>
    <tbody>    
      @foreach ($material as $s)
      <tr>
        <td class="top_margin">{{$s->cod_ma}}</td>
        <td class="top_margin">{{$s->Nombre}}</td>
      <td class="top_margin">
 <form action="{{url('/Material')}}/{{$s->id}}/crear" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <B>  <span class="glyphicon glyphicon-plus"></span>Agregar</B>
    </button>
  </p>
</form>
        </td>
  <td class="top_margin">
 <form action="{{url('/ambiente')}}/{{$s->id}}/informacion" method="get">
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Informacion">
    <button class="btn btn-warning btn-xs" data-title="Agregar">
    <B> <span class="glyphicon glyphicon-plus"></span>Informacion</B>
    </button>
  </p>
      </form></td>        
    </tr>
    @endforeach
  </tbody>
</table></section>
@stop
