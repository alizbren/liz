<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">  

  <script type="text/javascript" src=http://code.jquery.com/jquery-1.12.4.js></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

  <script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">

    <link  type="text/css" href="{{asset('/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">
    <link  type="text/css" href="{{asset('/fullcalendar/fullcalendar.print.css')}}" media="print" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
       
    <link  href="{{asset('/fullcalendar/lib/cupertino/jquery-ui.min.css')}}" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="/jquery.js"></script>
     
     <script type="text/javascript" language="javascript" src="/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
 
     <script type="text/javascript" src="/DataTables/datatables.min.js"></script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <!-- Bootstrap core CSS-->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="material.html">Bolivia Tech Hub</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <br><br><br><br><br><br><a class="nav-link" href="{{route('Usuarios.index')}}">
            <i class="fa fa-fw fa-dashboard"></i>

            <span class="nav-link-text"> EVENTOS </span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('ambiente.index')}}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">USUARIOS</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          
          <a class="nav-link" href="{{route('ambiente.index')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">AMBIENTE</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">MATERIALES</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">PARTICIPANTES</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      
       
        <li class="nav-item">
          
                  <ul class="navbar-nav ml-auto">  <!-- Authentication Links -->
                    @if (Auth::guest())
                        <ul class="nav-item ml-auto"><a href="{{ url('/login') }}"><b><i class="fa fa-user"></i>Login</b></a></ul>
                        <li class="nav-item ml-auto"><a href="{{ url('/register') }}"><b>Registrar +</b></a></ul>
                   </li> @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <b> {{ Auth::user()->name }}</b> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><b>Salir</b></a></li>
                            </ul>
                        </li>
                    @endif
                 </li>
     <!--    <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
       --> 
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <!-- Area Chart Example-->
@yield('content')
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Realizando sistemas © Liz Lemus 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    

    <!-- Logout Modal-->
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-charts.min.js"></script>
    <script src="{{asset('/fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
    <script src="{{asset('/fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{asset('/fullcalendar/fullcalendar.js')}}"></script>
    <script src="{{asset('/fullcalendar/lang-all.js')}}"></script>
    <script>
        //inicializamos el calendario al cargar la pagina
        $(document).ready(function() {
 
            $('#calendar').fullCalendar({
 
                header: {
                    left: 'prev,next today myCustomButton',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
 
            });
 
        });
    </script>
    <script type="text/javascript">


 
$(document).ready(function(){
    $('#Jtabla').DataTable();
 
});
</script>

  </div>
</body>

</html>
