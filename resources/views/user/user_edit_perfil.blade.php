<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Perfil</title>

    <!-- some CSS styling changes and overrides -->
    <style>
    .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
        margin: 0;
        padding: 0;
        border: none;
        box-shadow: none;
        text-align: center;
    }
    .kv-avatar {
        display: inline-block;
    }
    .kv-avatar .file-input {
        display: table-cell;
        width: 213px;
    }
    .kv-reqd {
        color: red;
        font-family: monospace;
        font-weight: normal;
    }
    .file-footer-buttons{
      display:none;
    }
    .bg{
        position: absolute;
        /* top: 7vh; */
        left: 0;
        width: 100%;
        height: 100vh;
        overflow-y: hidden;
        z-index:-1;

        /* height: 100vh; */

    }
    #regForm {
      background-color: #e1dbdb80;
      margin: 0;
      font-family: Raleway;
      padding: 40px;
      width: 40%;
      min-width: 300px;
      opacity: 0.9;
      position: absolute;
      top: 9%;
      left: 30%;
      border-radius: 51px;
    }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Bootstrap CSS -->
          <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
      <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
      <!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
          wish to resize images before upload. This must be loaded before fileinput.min.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/plugins/piexif.min.js" type="text/javascript"></script>
      <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
          This must be loaded before fileinput.min.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/plugins/sortable.min.js" type="text/javascript"></script>
      <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for
          HTML files. This must be loaded before fileinput.min.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/plugins/purify.min.js" type="text/javascript"></script>
      <!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js
         3.3.x versions without popper.min.js. -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
          dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- the main fileinput plugin file -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/fileinput.min.js"></script>
      <!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/themes/fa/theme.js"></script>
      <!-- optionally if you need translation for your language then include  locale file as mentioned below -->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/locales/(lang).js"></script> -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
    <!-- markup -->
    <!-- note: your server code `avatar_upload.php` will receive `$_FILES['avatar']` on form submission -->
    <!-- the avatar markup -->
    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

    <div class="container" id="regForm">
      <h1 class="text-center">Editar perfíl de muestra {{$user->name}}</h1>
      <form class="form form-vertical" action="{{ route('actualizarfoto2') }}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="row">
              <div class="col-sm-12 text-center">
                  <div class="kv-avatar">
                    <div class="file-input file-input-ajax-new">
                        <input id="avatar-2" name="foto" type="file" required="" tabindex="-1" class="file-no-browse">
                    </div>
                  </div>
              </div>
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Algo sobre mí:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="about" rows="3">{{$user->about}}</textarea>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <hr>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Realizar Cambios</button>
                  </div>
                </div>
              </div>
          </div>
      </form>
    </div>

    <script>
    var btnCust = '<button type="button" tabindex="500" title="Cancel or reset changes" class="btn btn-default btn-warning fileinput-remove "><i class="fas fa-window-close"></i> </button>';
    $("#avatar-2").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="/storage/userphotos/{{$user->foto}}" alt="Your Avatar" style="width:auto;height:auto;max-width:100%;max-height:100%;" ><h6 class="text-muted">Seleccionar</h6>',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
    </script>
  </body>
</html>




<!-- the fileinput plugin initialization -->
