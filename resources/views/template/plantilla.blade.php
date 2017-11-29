<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>BTH</title>

  <script type="text/javascript" src="/http://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="/https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

    

    <!-- Bootstrap CSS -->    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Bolivia <span class="lite">Tech</span>Hub</a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <ul class="navbar-nav ml-auto">
      
       
        <ul class="navbar-nav ml-auto">
      
       
        <li class="nav-item">
          
                  <ul class="navbar-nav ml-auto">  <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}"><b><i class="fa fa-user"></i>Login</b></a>
                        <li class="nav-item ml-auto"><a href="{{ url('/register') }}"><b>Registrar +
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
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="{{route('Usuarios.index')}}">
                          <i class="icon_house_alt"></i>
                          <span>USUARIOS</span>
                      </a>
                  </li>
          
               
                  <li>
                      <a class="" href="{{route('eventos.index')}}">
                          <i class="icon_genius"></i>
                          <span>EVENTOS</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="{{route('ambiente.index')}}">
                          <i class="icon_genius"></i>
                          <span>AMBIENTE</span>
                          
                      </a>
                                         
                  </li>
                   <li>                     
                      <a class="" href="{{route('material.index')}}">
                          <i class="icon_genius"></i>
                          <span><H6>MATERIALES-PRESTAMO</H6></span>
                          
                      </a>
                                         
                  </li>
                   <li>                     
                      <a class="" href="{{route('ambiente.index')}}">
                          <i class="icon_genius"></i>
                          <span>PARTICIPANTES</span>
                          
                      </a>
                                         
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
      @yield('content')

      </div>
             
          </section>
      </section>
      
      
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="/js/scripts.js">
      $(document).ready(function(){
    $('#myTable').DataTable();
});
    </script>



  </body>
</html>
