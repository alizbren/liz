
@extends('template.plantilla')

@section('content')
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="nav-item active">
    <a data-toggle="pill" class="nav-link active "  href="#home">LISTADO DE MATERIALES</a>
  </li>
  <li class="nav-item">
    <a  data-toggle="pill" class="nav-link" href="#menu1">LISTADO DE MATERIALES DISPONIBLES</a>
  </li>
  <li class="nav-item">
    <a  data-toggle="pill" class="nav-link" href="#menu2">LISTADO DE MATERIALES RESERVADOS</a>
  </li>
  <li class="nav-item">
    <a data-toggle="pill" class="nav-link" href="#menu2">LISTADO DE MATERIALES PRESTADOS</a>
  </li>
    </ul>
  </div>
</nav>


<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
     <table align="center"><tr><td>
     <h3>Total de Material Disponible</h3>
</td><td>
     <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Imprimir</B></H5>
    </button></td></tr></table>
    <table class="table table-bordered" id="myTabla" >
    <thead class="thead-inverse">
      <tr>
        <th>Codigo</th>
        <th>Codigo Mueble</th>
        <th>Codigo Ambiente</th>
        <th>Cantidad Prestada</th>
        <th>Historial De Prestamos</th>
        
        

      </tr>
    </thead>

    <tbody>
    
      
      <tr>
        <td >arduino1</td>
        <td >Estante6</td>
        <td >Sala tv2</td>
         <td> 7</td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Historial</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
    <tr>
        <td >oculus2</td>
        <td >Estante3</td>
        <td >laboratori1</td>
        <th>3</th>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Historial</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
    <tr>
        <td >Cardboard3</td>
        <td >Estante5</td>
        <td >laboratori1</td>
            <td> 7 </td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Historial</B></H5>
    </button>
  </p>

        </td>
  
    </tr><tr>
        <td >Lamtop4</td>
        <td >Estante2</td>
        <td >Sala tv2</td>
        <td>3</td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Historial</B></H5>
    </button>
  </p>

        </td>
  
    </tr><tr>
        <td >Camarafilmadora5</td>
        <td >Estante6</td>
        <td >Sala tv2</td>
         <td > 1</td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Historial</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
  </tbody>

</table>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3></h3>
    <table align="center"><tr><td>
     <h3>Material Disponible para prestamos</h3>
</td><td>
     <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Imprimir</B></H5>
    </button></td></tr></table>
    <table class="table table-bordered" id="myTabla" >
    <thead class="thead-inverse">
      <tr>
        <th>Codigo</th>
        <th>Codigo Mueble</th>
        <th>Codigo Ambiente</th>
        <th>Cantidad Disponible</th>
        <th>Prestar</th>
        
        

      </tr>
    </thead>

    <tbody>
    
      
      <tr>
        <td >arduino1</td>
        <td >Estante6</td>
        <td >Sala tv2</td>
         <td> 5</td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Prestar</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
    <tr>
        <td >oculus2</td>
        <td >Estante3</td>
        <td >laboratori1</td>
        <th>2</th>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Prestar</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
    <tr>
        <td >Cardboard3</td>
        <td >Estante5</td>
        <td >laboratori1</td>
            <td> 5 </td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Prestar</B></H5>
    </button>
  </p>

        </td>
  
    </tr><tr>
        <td >Laptop4</td>
        <td >Estante2</td>
        <td >Sala tv2</td>
        <td>3</td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Prestar</B></H5>
    </button>
  </p>

        </td>
  
    </tr><tr>
        <td >Camarafilmadora5</td>
        <td >Estante6</td>
        <td >Sala tv2</td>
         <td > 0</td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Prestar</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
  </tbody>

</table>
  </div>
  <div id="menu2" class="tab-pane fade">
    
    <table align="center"><tr><td>
     <h3>Material Prestados</h3>
</td><td>
     <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Imprimir</B></H5>
    </button></td></tr></table>
    <table class="table table-bordered" id="myTabla" >
    <thead class="thead-inverse">
      <tr>
        <th>Codigo</th>
        <th>Codigo Mueble</th>
        <th>Codigo Ambiente</th>
        <th>Cantidad a Prestada</th>
        <th>Fecha de reserva</th>
        <th>Informacion</th>
        
        

      </tr>
    </thead>

    <tbody>
    
      
      <tr>
        <td >arduino1</td>
        <td >Estante6</td>
        <td >Sala tv2</td>
         <td> 1</td>
         <td>07/12/2017 al 17/12/2017 </td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Informacion</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
    <tr>
        <td >oculus2</td>
        <td >Estante3</td>
        <td >laboratori1</td>
        <td> 1</td>
         <td>03/12/2017 al 07/12/2017 </td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Informacion</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
    <tr>
        <td >Cardboard3</td>
        <td >Estante5</td>
        <td >laboratori1</td>
            <td> 3</td>
         <td>01/12/2017 al 17/12/2017 </td>
      <td>
 
  <p data-placement="top" data-toggle="tooltip" title="" data-original-title="EDITAR">
    <button class="btn btn-primary btn-xs" data-title="Agregar">
    <H5><B>  <span class="glyphicon glyphicon-plus"></span>Informacion</B></H5>
    </button>
  </p>

        </td>
  
    </tr>
  </tbody>

</table>
  </div>



<div id="menu3" class="tab-pane fade in active">
    
  </div>

</div>


<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#mitabla').DataTable();
  } );
</script>
@stop