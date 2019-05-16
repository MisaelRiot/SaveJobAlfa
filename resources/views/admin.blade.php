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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
