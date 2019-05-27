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
          <li class=""><a href="#"><i class="fa fa-users"></i><span> Gestionar Usuarios</span></a><</li>
          <li><a href="#"><i class="fa fa-flag-o"></i><span> Validaciones</span><span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span></a></li>
          <li class="treeview active">
            <a href="#"> <i class="fa fa-edit"></i> <span>Gestionar Turorías</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Gestionar Universidades</a></li>
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
          Gestión Universidades
          <small>Miembro de Staff</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Gestión Tutorias</a></li>
          {{-- <li><a href="#">Examples</a></li> --}}
          <li class="active">Gestión Facultades</li>
        </ol>
      </section>
      <section class="content">
        @php
          $message=Session::get('message')
        @endphp

        @if ($message=='store')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Felicidades!</h4>
                !Facultad agregada exitosamente!
            </div>
        @endif
        @if ($message=='updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Felicidades!</h4>
                !Facultad actualizada exitosamente!
            </div>
        @endif
        @if ($message=='eliminated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Felicidades!</h4>
                !Facultad borrada exitosamente!
            </div>
        @endif
        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Añadir Facultad</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool"><i class="fa fa-plus"></i></button>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->

              <form method="POST" action="/admin/facultades"  role="form">
                @csrf
                <div class="box-body">

                  <div class="form-group">
                    <label for='universidad'>Seleccione la universidad</label>
                    <select name='universidad_id' id="universidad"  class="form-control">
                      <option value="">--Seleccionar Universidad--</option>
                      @foreach ($listaUniversidades as $universidad)
                        <option value="{{ $universidad->id }}">{{ $universidad->nombre }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="nombreUni">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Facultad">
                  </div>

                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
              </form>
            </div>
            <div class="box box-primary" id="expandir">
              <div class="box-header with-border">
                <h3 class="box-title">Editar Universidad</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool"><i class="fa fa-edit"></i></button>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->


              <form action="#" method="post" id="actualizador" role="form">
                <div class="form-group box-body">

                  <label>Seleccione la universidad</label>
                  @csrf
                  <select name='seleccionado' id="miUni"  class="form-control">
                    <option value="">--Seleccionar Universidad--</option>
                    @foreach ($listaUniversidades as $universidad)
                      <option value="{{ $universidad->id }}">{{ $universidad->nombre }}</option>
                    @endforeach
                  </select>

                </div>
                <div class="form-group box-body">
                  @csrf
                  <label>Seleccione la facultad</label>
                  <select name='seleccionado' id="miFacultad1"  class="form-control">
                    <option value="">--Seleccionar facultad--</option>

                  </select>

                </div>

                <hr>


                @method('PATCH')
                @csrf
                <div class="box-body">





                  <div class="form-group">
                    <label for='universidad'>Seleccione la universidad</label>
                    <select name='universidad_id' id="universidad"  class="form-control">
                      <option value="">--Seleccionar universidad--</option>
                      @foreach ($listaUniversidades as $universidad)
                        <option value="{{ $universidad->id }}">{{ $universidad->nombre }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="nombreUni2">Nombre:</label>
                    <input type="text" class="form-control" id="nombreUni2" name="nombreUni2" placeholder="Nombre de la facultad">
                  </div>

                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>


                </div>
              </form>
              <form class="" id="eliminador2" action="index.html" method="post">
                @method('delete')
                @csrf
                <div class="box-footer">
                  <button type="submit" id="eliminador" class="btn btn-danger">Eliminar</button>


                </div>
                {{-- <button type="submit" id="eliminador" class="btn btn-danger">Eliminar</button> --}}
              </form>
            </div><!-- /.box -->

          </div>
          <div class="col-md-8">
            <div class="box box-default in">
              <div class="box-header with-border">
                <h3 class="box-title">Ver Universidades</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                        <th>ID</th>
                        <th>Nit</th>
                        <th>Institución Educativa</th>
                        <th>Página Web</th>
                        <th>Fecha de inclusión</th>
                        <th>Fecha Actualización</th>
                      </tr>


                      @foreach ($listaUniversidades as $universidad)
                        <tr>
                          <td>{{ $universidad->id }}</td>
                          <td>{{ $universidad->nit }}</td>
                          <td>{{ $universidad->nombre }}</td>
                          <td><a href="{{ $universidad->paginaWeb }}">{{ $universidad->paginaWeb }}</a></td>
                          <td>{{ $universidad->created_at }} <span class="label label-success">Verificada</span></td>
                          <td>{{ $universidad->updated_at }}</td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              <!-- /.box-body -->
            </div><!-- /.box -->
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
    <script src="{{URL::asset ('admin/dist/js/demo.js')}}"></script>
    <!-- Cambiar accion para borrar universidad-->
    <script type="text/javascript">
      $('#eliminador').on('click',function(){
        let dato = document.getElementById('mi').value;

        $('#eliminador2').attr('action', '/admin/universidades/'+dato);
      })
    </script>
    <!-- buscar universidad con base a la seleccion-->
    <script type="text/javascript">

      $('#miUni').on('change',function(){

          $value=$(this).val();
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax(
          {

            type : 'get',

            url : '{{URL::to('admin/buscarfacultad')}}',

            data:{'search':$value},

            dataType: 'JSON',

            success:function(data)
            {

              console.log(data);
              // console.log(data.nombre);
              $('#miFacultad1').empty();

                    $.each(data, function(key, value){

                        $('#miFacultad1').append('<option value="'+ key +'">' + value + '</option>');

                    });

            }

          });



      })

    </script>

  </body>
</html>
