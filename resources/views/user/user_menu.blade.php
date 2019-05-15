<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="paginaUsuario.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="{{ asset('user/css/menu.css') }}" rel="stylesheet">
    <title>Menú Principal</title>





  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">SaveJob</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Notificationes <span id="nota" style="  background-color: #fa3e3e; border-radius: 2px; color: white; padding: 1px 3px; font-size: 10px;">
               6</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <div class="" style="max-height:50px; overflow:auto;">
                <a class="dropdown-item" href="#">Notificación 1</a>
                <a class="dropdown-item" href="#">Notificación 2</a>
              </div>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ver todas..</a>
            </div>



          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Editar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Perfil de muestra</a>
              <a class="dropdown-item" href="#">Información Personal</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <img src="{{ asset('user/img/menu/FondoPerfil.png') }}" class="bg" alt="">

    <!-- contenedor de la aplicación -->
    <div class="d-flex" id="wrapper">
      <!-- contenido principal -->
      <div class="container">

      <div class="container gallery-container">

        <h1 class="text-center">Menu de Usuario</h1>
        <!-- escondedor de perfil -->
        <p class="page-description text-center nomostrar"> <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button></p>


        <div class="tz-gallery">

          <div class="row mb-3">
              <div class="col-md-4" style="text-align:center;">
                  <div class="card" style="background-color:transparent; border:0px">
                      <h5>Solicitud</h5>
                      <a class="lightbox" href="images/park.jpg">
                      <img src="{{ asset('user/img/menu/solicitud.png') }}" style="height: 200px; width:200px;" alt="Park" class="card-img-top">
                      </a>
                  </div>
              </div>

              <div class="col-md-4" style="text-align:center;">
                  <div class="card">
                      <h5>Ofrecimiento</h5>
                      <a class="lightbox" href="images/benches.jpg">
                      <img src="{{ asset('user/img/menu/ofrecimiento.png') }}" style="height: 200px; width:200px;" alt="Park" class="card-img-top">
                      </a>
                  </div>
              </div>

              <div class="col-md-4" style="text-align:center;">
                  <div class="card">
                      <h5>Sanciones</h5>
                      <a class="lightbox" href="images/bridge.jpg">
                      <img src="{{ asset('user/img/menu/sanciones.png') }}" style="height: 200px; width:200px;" alt="Park" class="card-img-top">
                      </a>
                  </div>
              </div>
          </div>
            <div class="row">
              <div class="col-md-4" style="text-align:center;">
                  <div class="card">
                    <h5>Ganancias y Pagos</h5>
                      <a class="lightbox" href="images/coast.jpg">
                      <img src="{{ asset('user/img/menu/ganancias.png') }}" style="height: 200px; width:200px;" alt="Park" class="card-img-top">
                      </a>
                  </div>
              </div>

              <div class="col-md-4" style="text-align:center;">
                  <div class="card">
                    <h5>Historial</h5>
                      <a class="lightbox" href="images/rails.jpg">
                      <img src="{{ asset('user/img/menu/Historial.png') }}" style="height: 200px; width:200px;" alt="Park" class="card-img-top">
                      </a>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="text-align:center;">
                    <h5>Soporte</h5>
                      <a class="lightbox" href="images/rocks.jpg">
                      <img src="{{ asset('user/img/menu/soporte.png') }}" style="height: 200px; width:200px;" alt="Park" class="card-img-top">
                      </a>
                  </div>
              </div>

          </div>

      </div>

      </div>

      </div>
      <!-- contenido principal ends-->

      <!-- side-user-menu -->
      <aside class="izquierdo toggled">
        <div class="perfil-muestra">
            <img src="{{ asset('user/img/menu/primipara.jpg') }}">
            <h4> Maria, 18 años</h4>
            <h5> <i class="fas fa-user-graduate"></i> Universidad Nacional de Colombia</h5>
            <hr>
            <p>Me gusta la tecnología y las ciencias de la computación,
            soy una persona tolerante y tranquila.</p>
        </div>
      </aside>
      <!-- end-side-user-menu -->
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(".izquierdo").toggleClass("toggled");
      });
    </script>
  </body>
</html>
