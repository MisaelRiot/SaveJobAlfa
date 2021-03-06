<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ URL::asset('admin/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('admin/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('admin/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  </head>
  <body class="hold-transition fixed skin-blue sidebar-mini">
    <header class="main-header">
      <a href="../../index2.html" class="logo" style="background-color: #222d32 !important; font-weight: 900;">
        <span class="logo-mini"><b>S</b>J</span>
        <!-- LOGO -->
        Save<span>Job</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown messages-menu">
              <a href="#" TITLE="Notificaciones" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Sender Name
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Message Excerpt</p>
                      </a>
                    </li><!-- end message -->
                    ...
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown messages-menu">
              <a href="#" TITLE="Validaciones nuevas" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Sender Name
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Message Excerpt</p>
                      </a>
                    </li><!-- end message -->
                    ...
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header" style="
                    border-top-left-radius: 4%;
                    border-top-right-radius: 4%;
                ">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <!-- Inner sidebar -->
      <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>User Name</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div><!-- /.user-panel -->



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
          <li class="header">FUNCIONES</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="#"><i class="fa fa-users"></i><span> Gestionar Usuarios</span></a><</li>
          <li><a href="#"><i class="fa fa-flag-o"></i><span> Validaciones</span><span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span></a></li>
          <li class="treeview">
            <a href="#"> <i class="fa fa-edit"></i> <span>Gestionar Turorías</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Gestionar Universidades</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Gestionar Facultades</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Gestionar Carreras</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Gestionar Pensums</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Gestionar Asignaturas</a></li>
            </ul>
          </li>
        </ul><!-- /.sidebar-menu -->

      </div><!-- /.sidebar -->
    </aside><!-- /.main-sidebar -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Perfil de Usuario
          <small>Miembro de Staff</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          {{-- <li><a href="#">Examples</a></li>
          <li class="active">User profile</li> --}}
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">User Name</h3>

                <p class="text-muted text-center">Miembro de Staff</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Validaciones Totales</b> <a class="pull-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Validaciones Realizadas</b> <a class="pull-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Validaciones Pendientes</b> <a class="pull-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Promover</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- About Me Box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Sobre Mí</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>


                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.box-body -->
            </div>


          </div>
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Actividades</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <h2>Algunos atajos!</h2>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      En esta sección cuentas con algunos atajos,
                      para agilizar tus obligaciones del día, también las podrás
                      encontrar en la barra lateral a tu izquierda, te deseamos muchos éxitos y un lindo y productivo día.
                    </p>

                    <div class="">
                      <!-- small box -->
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h3>Número de usuarios</h3>

                          <p>Gestionar Usuarios</p>
                        </div>
                        <div class="icon">
                          <i class="fa ion ion-person"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Realizar acción <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                    <div class="">
                      <!-- small box -->
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3>Validaciones Pendientes</h3>

                          <p>Realizar Validaciones</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-flag-o"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Realizar Acción <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>

                    <div class="">
                      <!-- small box -->
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3>Asignaturas Agregadas</h3>

                          <p>Gestionar Tutorías</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-edit"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Realizar Acción <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                  <!-- /.post -->




                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
        </div>

      </section>


    </div>

    <script src="{{URL::asset ('admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{URL::asset ('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{URL::asset ('admin/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{URL::asset ('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{URL::asset ('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>

    <script src="{{URL::asset ('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{URL::asset ('admin/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

    <script src="{{URL::asset ('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{URL::asset ('admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{URL::asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{URL::asset ('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset ('admin/plugins/fastclick/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{URL::asset ('admin/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{URL::asset ('admin/dist/js/pages/dashboard.js')}}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="{{URL::asset ('admin/dist/js/demo.js')}}"></script>
  </body>
</html>
