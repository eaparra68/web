?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Modificar titulo de página -->
  <title>Ventas Online | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!-- Libreria Sweetalert2 -->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <script>
    
      Swal.fire("Bienvenido al portal de Ventas Online");

</script>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">PORTAL DE VENTAS ONLINE</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
     <li class="nav-item dropdown">
       <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a> -->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> 
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>  
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> 
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container es el menú de la izquierda página principal -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="ds" class="brand-link">
      <img src="<?php echo $URL;?>/public/images/Tienda1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ventas Online</span>
    </a>
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/img/avatar1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info"> 
          <a href="#" class="d-block"><?php echo $nombres;?></a> <!--llamo la variable en php que me trae el nombre -->
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item"> <!--quito el menu open para que no quede abierto siempre-->
            <a href="#" class="nav-link active"> 
              <i class="nav-icon fas fa-users"></i> <!-- fa-tachometer-alt" lo cambio por lo que está actualmente -->
              <p>
                Usuarios  <!--cambio el nombre a USUARIOS antes Starter pages-->
                <i class="right fas fa-angle-leftfa"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/index.php" class="nav-link"> <!--quito el active page para que no aparezca blanco en la página ppal 
                  y cambio el # por la ruta de usuarios-->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>  <!-- puedo cambiarlo por; Listado de Usuarios -->
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/user_form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Usuario</p>  <!-- Puedo cambiarlo por : Creación de usuario-->
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item"> <!--quito el menu open para que no quede abierto siempre-->
            <a href="#" class="nav-link active"> 
              <i class="nav-icon fas fa-tags"></i> <!-- añado la palabra tags para cambiar el icono -->
              <p>
                Categorias
                <i class="right fas fa-angle-leftfa"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/index.php" class="nav-link">  
                   <i class="far fa-circle nav-icon"></i>
                  <p>Listado de categorias</p>  <!-- puedo cambiarlo por; Listado de categorias -->
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item"> <!--quito el menu open para que no quede abierto siempre-->
            <a href="#" class="nav-link active"> 
              <i class="nav-icon fas fa-list"></i> <!-- añado la palabra tags para cambiar el icono -->
              <p>
                Almacen
                <i class="right fas fa-angle-leftfa"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/almacen/index.php" class="nav-link">  
                   <i class="far fa-circle nav-icon"></i>
                  <p>Listado de productos</p>  <!-- puedo cambiarlo por; Listado de categorias -->
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/almacen/crearproducto.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de productos</p>  <!-- Puedo cambiarlo por : Creación de usuario-->
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo $URL;?>/app/controladores/login/cerrar_sesion.php" class="nav-link" style="background-color: red"> <!--añadimos un estilo, la ruta de cerrar sesión la pego
              donde estaba antes el "#" -->
              <i class="nav-icon fas fa-door-closed"></i> <!--cambio el ícono -->
              <p>
               Cerrar Sesion <!-- Simple Link -->
               <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 

