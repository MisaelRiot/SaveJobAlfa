<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Bienvenido a SaveJob</title>
    <link rel="stylesheet" href="{{ URL::asset('css/estiloLandin.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>




  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="barra" style="background-color: transparent; z-index: 4; text-shadow: 2px 2px 8px black;">
      <a class="navbar-brand" href="/">SaveJob</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#loquedebesSaber">Requisitos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sobreNosotros">Sobre nosotros</a>
          </li>

        </ul>

      </div>
    </nav>

    <header>
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ URL::asset('img/help.mp4')}}" type="video/mp4">
      </video>

      <div class="container h-100">

        <div class="h-100 text-center align-items-center">
          <img src="{{ URL::asset('img/LogoInicio.png')}}" class="" alt="">
          <div class="w-100 text-white bienvenida" style="text-shadow: 2px 2px 8px black;">
            <h1 class="display-3">Bienvenido!</h1>
            <p class="lead mb-0">Aprende con personas que ya han vivido tu experiencia y logra tus metas académicas.</p>
            <br>
            <button type="button" class="btn" name="button">INICIAR SESION</button>
            <br>
            <br>
            <button type="button" class="btn rosa" name="button">REGISTRARSE</button>
          </div>
        </div>
      </div>
    </header>

    <section class="news">
      <div class="container2">
        <div class="row">
          <div class="col-lg-6 offset-lg-6 section-bg-color" style="overflow-y: scroll; height:100vh;">
            <p><img src="img/misa160.png" class="img-circle mr" height="40">
              <strong>Misael Mondragón Lenis</strong>
              <small> Co-fundador de SaveJob</small>
            </p>

            <hr>
            <h1>¿Qué es SaveJob?</h1>
            <h3>SaveJob es una plataforma web, en la cual los usuarios pueden brindar u ofrecer tutorías.</h3>
            <hr class="blog">
            <p class="d-md-none d-lg-block">Esta plataforma esta pensada para estudiantes universitarios, tanto para aquellos que quieren ganar un dinero, como para aquellos que quieren mejorar su desempeño académico.</p>
            <p class="d-md-none d-lg-block">La idea de hacer esta plataforma, nace de las necesidades que experimenté como estudiante universitario,
               cuando muchas veces tuve dificultades para entender un tema o me atrasaba por estar profundizando en una asignatura.
               Y como mi carrera era atípica fue practicamente imposible recibir una buena asesoría por fuera de la aulas.</p>
            <p class="d-md-none d-lg-block">En otras ocaciones lograba entender muy bien un tema, pero sentía la impotencia de no poder capitalizar con ello y por tanto dejaba de repasar para seguir con otros desafíos.</p>
            <p>SaveJob te da la oportunidad de ganar dinero extra, enseñando aquellas cosas que ya conoces y de aprender con aquellas personas que ya vivieron tu experiencia y siguen con el tema fresco,
               solo tienes que registrarte he ingresar. </p>
            <p class="mt">Te deseo muchos exitos en esta aventura.</p>
          </div>
        </div>
        <!--/row -->
      </div>
      <!--/container -->
    </section>
    <!--/NEWS -->

    <section id="services" style="overflow-y: scroll;">
      <div class="container3">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Lo que debes saber</h2>
            <h3 class="section-subheading text-muted">Antes de registrarte es importante que sepas estas tres cosas.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-address-card fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Certificado de Matrícula</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Proceso de Validación</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laugh fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Menores de edad</h4>
            <p class="text-muted">Si eres menor de edad, también puedes trabajar solo debes contar con un <a href="#">permiso adecuado</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246; position:relative; width:100%;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="{{ URL::asset('img/LogoInicio.png')}}" alt="SaveJob Logo" width="140" height="137" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacto</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, Jaipur, Raj</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">+91 7568543012</a> <span>or</span> <a href="tel:#">+91 9571195353</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Staff</h5>
              <ul class="nav-list">
                <li><a href="#">Ingreo</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>

              </ul>
            </div>
          </div>
        </div>

      </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
  </body>




</html>
