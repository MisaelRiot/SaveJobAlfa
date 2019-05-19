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

  </head>
  <body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <h1>Conectando con ofrecimiento..{{ $solicitud->valor}}</h1>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="cont_menj">
            UN USUARIO atenderá tu solicitud
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="deletesuccess" class="btn btn-primary">Save changes</button>
          </div>
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
          var channel = pusher.subscribe('private-notificaciondemodal.{{ $solicitud->id }}');
                                                                        //user()->ofrecimiento->id
          // Bind a function to a Event (the full Laravel class)
          channel.bind('App\\Events\\TestingPopUp', function(data) {
            $('#exampleModal').modal('show');
          // $('#cont_menj').html(data['mensaje']);
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
                     // window.location.replace("/");
                     location.reload(true);
                     // cvr.add(dlg).hide();
                  }
              })();
          }






          });
    </script>
  </body>
</html>
