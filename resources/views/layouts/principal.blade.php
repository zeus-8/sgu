<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sigetrab | Control</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="_token" content="{!! csrf_token() !!}"/>
  {{-- <link rel="icon" type="image/png" href="/bee.png" /> --}}
  <!-- Bootstrap 3.3.6 -->
  {!!Html::style('/bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
  {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')!!}
    <!-- Ionicons -->
  {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')!!}
  <!-- DataTables -->
  {!! Html::style('/plugins/datatables/dataTables.bootstrap.css') !!}
  <!-- Select2 -->
  {!! Html::style('/plugins/select2/select2.min.css') !!}
  <!-- Theme style -->
  {!!Html::style('/dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  {!!Html::style('/dist/css/skins/skin-blue.min.css')!!}
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-connectdevelop"></i></span>
      <!-- logo for regular state and mobile devices -->
      <!-- variable para identificar el usuario -->
      <span class="logo-lg"><b>Beehive</b> Project <i class="fa fa-connectdevelop"></i></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- seccion de mensajes -->
          {{-- <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 4 mensajes</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <!-- seccion para mostrar los mensajes -->
                      <h4>
                        Titulo de Ejemplo
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Resumen del mensaje</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li> --}}
          <!-- /.messages-menu -->

          <!-- Tasks Menu -->
          {{-- <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-graduation-cap"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Usted Posee 3 Cursos Activos</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Prog. Pag. Web
                        <small class="pull-right">65%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress progress-sm active">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                          <span class="sr-only">65% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Diseno Pag. Web
                        <small class="pull-right">45%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress progress-sm active">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                          <span class="sr-only">45% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Diseno Grafico
                        <small class="pull-right">30%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress progress-sm active">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ir a Programacion</a>
              </li>
            </ul>
          </li> --}}
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- imagen del usuario logueado -->
              <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Juan Sierra</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Usuario de Ejemplo. - Web Developer
                  <small>Fecha de inicio</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                {{-- <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Facturas</a>
                  </div>
                    
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> --}}
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="login" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- barra para algun tipo de configuracion -->
          <!--  
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Juan Sierra</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> --}}

      <!-- search form (Optional) -->
      <!--  
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

        <li class="header"><i class="fa fa-users" ></i> USUARIOS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-map-signs"></i> <span>Gestion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! URL::to('/usuario/create') !!}"><i class="fa fa-mortar-board"> Roles</i></a></li>
            <li><a href="{!! URL::to('/usuario') !!}"><i class="fa fa-unlock"> Permisos</i></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>Usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! URL::to('/usuario/create') !!}"><i class="fa fa-user-plus"> Agregar</i></a></li>
            <li><a href="{!! URL::to('/usuario') !!}"><i class="fa fa-list-ol"> Usuarios</i></a></li>
          </ul>
        </li>
       {{-- <li><a href="#"><i class="fa fa-barcode"></i> <span>Productos</span></a></li>
        <li><a href="#"><i class="fa fa-graduation-cap"></i> <span>Cursos y Gurpos</span></a></li>
         <li><a href="#"><i class="fa fa-barcode"></i> <span>link</span></a></li>
        <li><a href="#"><i class="fa fa-barcode"></i> <span>link</span></a></li>
        <li><a href="#"><i class="fa fa-barcode"></i> <span>link</span></a></li>
        <li><a href="#"><i class="fa fa-barcode"></i> <span>link</span></a></li> --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    @yield('content')

    
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      If you think about what you think
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 Sierra Corporation.</strong> Todos los derechos reservados.
  </footer>
   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
{!!Html::script('/plugins/jQuery/jquery-2.2.3.min.js')!!}

<!-- Bootstrap 3.3.6 -->
{!!Html::script('/bootstrap/js/bootstrap.min.js')!!}

<!-- AdminLTE App -->
{!!Html::script('/dist/js/app.min.js')!!}

<!-- DataTables -->
{!! Html::script('/plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('/plugins/datatables/dataTables.bootstrap.min.js') !!}

<!-- Select2 -->
{!! Html::script('/plugins/select2/select2.full.min.js') !!}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>