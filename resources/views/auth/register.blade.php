@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Registro') }} {{ isset($url) ? "de Administradores SaveJob" : "de Usuarios"}} </div>

                  <div class="card-body">
                      @isset($url)
                      <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}" >
                      @else
                      <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                      @endisset
                          @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        @isset($url)
                          <div class="form-group row">
                              <label for="documento" class="col-md-4 col-form-label text-md-right">{{ __('Número de Documento') }}</label>

                              <div class="col-md-6 input-group">
                                  <input id="documento" type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" value="{{ old('documento') }}" placeholder="No." required>

                                  @error('documento')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                              <div class="col-md-6">
                                  <input id="fechaNacimiento" type="text" class="form-control dates @error('lastname') is-invalid @enderror" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}" required autocomplete="fechaNacimiento">
                                  <script>
                                      $('#fechaNacimiento').datepicker({
                                          uiLibrary: 'bootstrap4'
                                      });
                                  </script>
                                  @error('fechaNacimiento')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="fechaContrato" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Contrato') }}</label>

                              <div class="col-md-6">
                                  <input id="fechaContrato" type="text" class="form-control dates @error('fechaContrato') is-invalid @enderror" name="fechaContrato" value="{{ old('fechaContrato') }}" required autocomplete="fechaContrato">
                                  <script>
                                      $('#fechaContrato').datepicker({
                                          uiLibrary: 'bootstrap4'
                                      });
                                  </script>
                                  @error('fechaContrato')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                              <div class="col-md-6">
                                  <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required>

                                  @error('telefono')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                        @else
                          <div class="form-group row">
                              <label for="documento" class="col-md-4 col-form-label text-md-right">{{ __('Número y Tipo de Documento') }}</label>

                              <div class="col-md-6 input-group">
                                  <input id="documento" type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" value="{{ old('documento') }}" placeholder="No." required autocomplete="documento" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <select class="input-group-text {{ $errors->has('tipodocumento') ? ' has-error' : '' }}" id="basic-addon2" name="tipodocumento">
                                      <option value=1>CC</option>
                                      <option value="2">CE</option>
                                      <option value="3">TI</option>
                                    </select>
                                  </div>
                                  @error('documento')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                              <div class="col-md-6">
                                  <input id="fechaNacimiento" type="text" class="form-control dates @error('lastname') is-invalid @enderror" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}" required autocomplete="fechaNacimiento">
                                  <script>
                                      $('.dates').datepicker({
                                          uiLibrary: 'bootstrap4'
                                      });
                                  </script>
                                  @error('fechaNacimiento')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                              <div class="col-md-6">
                                  <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required>

                                  @error('telefono')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                              <div class="col-md-6">
                                  <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" required>

                                  @error('direccion')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="institucion" class="col-md-4 col-form-label text-md-right">{{ __('Institucion Educativa') }}</label>

                              <div class="col-md-6">
                                  <input id="institucion" type="text" class="form-control @error('institucion') is-invalid @enderror" name="institucion" required>

                                  @error('institucion')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="certificado" class="col-md-4 col-form-label text-md-right">{{ __('Certificado') }}</label>

                              <div class="col-md-6">
                                  <input id="certificado" type="file" class="form-control   @error('certificado') is-invalid @enderror" name="certificado"  required>

                                  @error('certificado')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                        @endisset

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        @isset($url)
                        @else

                        <div class="form-check form-group row" style="padding-left: 4.25rem;">
                          <p></p>
                          <input class="form-check-input col-md-12 text-md-left" type="checkbox" style="margin-top: -0.7rem;" value="1" id="defaultCheck1" name="terminosCondiciones">

                          <label class="form-check-label col-md-12 text-center" for="defaultCheck1">
                            Acepto términos y condiciones de uso
                          </label>
                        </div>
                      @endisset

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
