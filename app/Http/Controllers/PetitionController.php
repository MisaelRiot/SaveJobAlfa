<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petition;
class PetitionController extends Controller
{
    //
    //mostrar formulario de solicitud
    public function formularioSolicitud()
    {

      return view('user.user_solicitud');

    }

    public function envioSolicitud(Request $request)
    {
      // return($request);
      date_default_timezone_set('America/Bogota');

      // return dd(date("g:i A",strtotime(date("g:i A"). ' + 1 hour')));
      $request->validate([
          'direccion' => ['required', 'string', 'max:198'],
          'descripcion' => ['required', 'string', 'max:198'],
          'fecha' => ['required', 'date', 'after_or_equal:today'],
          'time'    => 'date_format:"g:i A"|required|after:'.date("g:i A",strtotime(date("g:i A"). ' + 1 hour')),
          'asignatura' => ['required', 'numeric'],
          'numerohoras' => ['required', 'numeric'],
          // 'fecha' => ['required', 'string'],
          // 'time' => ['required', 'string'],
          // 'asignatura' => ['required'],
          // 'numerohoras' => ['required'],

      ]);
      $solicitud = new Petition;
      $solicitud
      return dd('go');
    }



}
