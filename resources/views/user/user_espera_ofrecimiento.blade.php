<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscando...</title>
    <link rel="stylesheet" href="{{ asset('user/css/espera.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/interaccion.css') }}">

  </head>
  <body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <h1 id="cambio">Conectando con Solicitud..{{ $ofrecimiento->id}}</h1>
    <div id="cooking">
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class='longfazers'>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- <div id="area">
        <div id="sides">
          <div id="pan"></div>
          <div id="handle"></div>
        </div>
        <div id="pancake">
          <div id="pastry"></div>
        </div>
      </div> -->
    </div>

    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="deletesuccess" onclick="irAinteraccion()" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat interaccion1">
					<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">

						<div class="input-group">
              <img src="{{ asset('user/img/LogoInicio.png') }}" class="card-img-top" style="height: 75px; width:79px; margin-left: auto; margin-right: auto;" alt="">
							<!-- <input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div> -->
						</div>
            <h1 class="text-center">Interacción</h1>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Mariana Doe</span>
									<p>Maryam solicitó el servicio</p>
								</div>
                <hr style="color: #f00; background-color: #f00; ">
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Catalina Alegría</span>
									<p>Sahar aceptó la solicitud</p>
								</div>
							</div>
						</li>
            <div class="dropdown-divider"></div>


						<li>
							<div class="d-flex bd-highlight" style="color: ##212529; font-size: 1.5rem;">
								<div class="img_cont">
                  <span>Fecha:</span>
									<p>25 de abril de 2019</p>
                  <!-- <img src="https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span> -->
								</div>
								<!-- <div class="user_info">
									<span>Fecha:</span>
									<p>25 de abril de 2019</p>
								</div> -->
							</div>
						</li>
            <li>
							<div class="d-flex bd-highlight" style="color: ##212529; font-size: 1.5rem;">
								<div class="img_cont">
                  <span>Dirección del servicio:</span>
									<p>Calle 25d # 40-65 </p>
                  <!-- <img src="https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span> -->
								</div>
								<!-- <div class="user_info">
									<span>Fecha:</span>
									<p>25 de abril de 2019</p>
								</div> -->
							</div>
						</li>
            <li>
							<div class="d-flex bd-highlight" style="color: ##212529; font-size: 1.5rem;">
								<div class="img_cont">
                  <span>Valor del servicio:</span>
									<p>$30500 COP</p>
                  <!-- <img src="https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span> -->
								</div>
								<!-- <div class="user_info">
									<span>Fecha:</span>
									<p>25 de abril de 2019</p>
								</div> -->
							</div>
						</li>
            <li>
							<div class="d-flex bd-highlight" style="color: ##212529; font-size: 1.5rem;">
								<div class="img_cont">
                  <span>Materia:</span>
									<p>Ayuda con esto y aquello</p>
                  <!-- <img src="https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span> -->
								</div>
								<!-- <div class="user_info">
									<span>Fecha:</span>
									<p>25 de abril de 2019</p>
								</div> -->
							</div>
						</li>
            <li>
							<div class="d-flex bd-highlight" style="color: ##212529; font-size: 1.5rem;">
								<div class="img_cont">
                  <span>Descripción:</span>
									<p>Ayuda con esto y aquello</p>
                  <!-- <img src="https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span> -->
								</div>
								<!-- <div class="user_info">
									<span>Fecha:</span>
									<p>25 de abril de 2019</p>
								</div> -->
							</div>
						</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div>
      </div>

    </div>

    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script type="text/javascript">
          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;

          var pusher = new Pusher('db145b8601f84f0f2ed8', {
            cluster: 'us2',
            authEndpoint: '/broadcasting/auth',

            encrypted: true,
            auth: {
                    headers: {
                      'X-CSRF-Token': document.getElementsByName('csrf-token')[0].content
                    }
                  },

          });

          // Subscribe to the channel we specified in our Laravel Event
          var channel = pusher.subscribe('private-ofrecimientonuevo.{{ $ofrecimiento->id }}');
                                                                        //user()->ofrecimiento->id
          // Bind a function to a Event (the full Laravel class)
          channel.bind('App\\Events\\OfrecimientoNuevo', function(data) {
            $('#cont_menj').html(data.mensaje);
            $('#exampleModalLabel').text(data.mensaje);
            $('#exampleModal').modal('show');
          //   //
            // console.log(data.mensaje)
          // var cvr = $("#cover");
          // var dlg = $("#dialog");
          var t = 10;
          // isVisibleCvr = cvr.is(":visible");
          // isVisibleDlg = dlg.is(":visible");
          if(true){
              (function countDown(){
                  if (t--) {
                     $('#cont_menj').html(t + ' s');
                     setTimeout(countDown, 1000);
                  } else {
                     $('#cont_menj').html('gone!');
                     $('#deletesuccess').remove();
                     window.location.replace("/user/interaccion");

                     // cvr.add(dlg).hide();
                  }
              })();
          }





          });
    </script>

    <script type="text/javascript">
      function irAinteraccion(){
        window.location.replace("/user/interaccion");
      }

    </script>
  </body>
</html>
