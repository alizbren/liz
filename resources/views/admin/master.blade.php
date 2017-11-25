<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="/padmin/assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="/padmin/assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="/padmin/assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='/padmin/assets/fonts/fonts.css' rel='stylesheet' type='text/css' />
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="/padmin/assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="/padmin/assets/js/bootstrap.min.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="/padmin/assets/js/custom.js"></script>

  @yield('head_script')
</head>
<body >

  <div id="wrapper">
   <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="logout-spn" href="/administrador/" style="color:#6699999;">
          Registrar Dueño
        </a>
      </div>
      <span class="logout-spn" >
        <a href="#" style="color:#6699999;">LOGOUT</a>

      </span>
    </div>
  </div>
  <!-- /. NAV TOP  -->
 
  <!-- /. NAV SIDE  -->
  

  @section('content')
  <!-- /. ROW  -->
  
@show

<!-- /. ROW  -->

</div>
<!-- /. PAGE INNER  -->
</div>



<!-- /. WRAPPER  -->

<style type="text/css">
  .top_margin{ padding-top: 10% !important; }
</style>
<script type="text/javascript">
  $("#form_delete").submit(function(){
    if(confirm("Estas seguro en eliminar ?")){
      return true;
    }else{
      return false;
    }
  });
</script>
<style type="text/css">
  #mycontent-left {
    border-right: 1px dashed #333;
  }
</style>

@yield('footer_script')

</body>
</html>