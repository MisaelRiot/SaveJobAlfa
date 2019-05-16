@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi boss! tenemos {{count(Auth::user()->validaciones)}} validaciones para realizar.
                    <ul>
                      @foreach (Auth::user()->validaciones as $validacion)
                        <li>{{$validacion->user_id}}</li>
                        <a href="{{$validacion->user->certificado}}" target="_blank">Visualizar certificado</a>
                      @endforeach
                    </ul>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Launch demo modal
                    </button>

                    <!-- Modal -->
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
                            UN USUARIO REQUIERE TU SERVICIO
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="deletesuccess" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>


                </div>
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
        authEndpoint: 'broadcasting/auth',

        encrypted: true,
        auth: {
                headers: {
                  'X-CSRF-Token': document.getElementsByName('csrf-token')[0].content
                }
              },

      });

      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('private-notificaciondemodal.{{ Auth::guard('admin')->user()->id }}');
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
                 window.location.replace("/");

                 // cvr.add(dlg).hide();
              }
          })();
      }





      });
</script>
@endsection
