@extends('template.plantilla')
@section('content')

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a  data-toggle="pill" class="nav-link" href="#home">LISTADO DE USUARIOS</a>
  </li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   <table class="table" align="center" border="0"><tr><td>
<b> <h3>Listado de Usuarios  </h3></b>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td> 
</td>
</tr></table>
<table class="table" align="center" border="0"><tr><td>
<div class="table-responsive" align="center">
  <table  id="mitabla" class="display" cellspacing="0" width="100%">
    <thead class="thead-inverse">
      <tr>
       
        <th>Nombre</th>
        <th>Email </th>
        <th>Telefono/Celular</th>
        <th>Rol</th>
       
        
        
        

      </tr>
    </thead>
    <tbody>
    
      @foreach ($usuario as $s)
      <tr>
        
        <td class="top_margin">{{$s->name}}</td>
        <td class="top_margin">{{$s->email}}</td>
        <td class="top_margin">{{$s->telefono}}</td>
        <td class="top_margin">{{$s->RolA}}</td>
      
     
        
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