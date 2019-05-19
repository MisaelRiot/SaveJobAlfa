
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Interacción</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <link rel="stylesheet" href="{{ asset('user/css/interaccion.css') }}">
	</head>
	<!--Coded With Love By Mutiullah Samim-->
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
          <li class="nav-item drop">
            <a class="nav-link" href="#">Editar perfil</a>
          </li>
        </ul>
      </div>
    </nav>
		<div class="container-fluid h-100">
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
				</div></div>
				<div class="col-md-8 col-xl-6 chat interaccion2">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Interactuando con Mariana Doe</span>
									<p>7/20 Mensajes disponibles</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Hola Catalina, ¿cómo estás?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hola Mariana, muy bien y tú?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg">
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Bien, aunque un poco preocupada por que no entiendo muy bien los arquetipos de la sociedad contemporanea.
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									No te preocupes, yo te los explico y tengo el trabajo final!
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg">
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Justo lo que quería, me servirá como guía!
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Parfecto, nos vemos en una hora!
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
						<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg">
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Vale, te espero.
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
              <div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									<img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="" style="width:300px;">
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#action_menu_btn').click(function(){
      $('.action_menu').toggle();
      });
      });
    </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
