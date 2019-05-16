<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Petition;
use App\User;
use Auth;
class PetitionController extends Controller
{
    //
    //mostrar formulario de solicitud
    public function formularioSolicitud()
    {

      return view('user.user_solicitud');

    }
     public function esperarOfrecimiento($id)
     {

       $solicitud = Petition::find($id);


       return view('user.user_espera')->with('solicitud', $solicitud);
     }

    protected function solicitudValidator(array $data)
    {
      date_default_timezone_set('America/Bogota');
      return Validator::make($data, [
        'direccion' => ['required', 'string', 'max:198'],
        'descripcion' => ['required', 'string', 'max:198'],
        'fecha' => ['required', 'date', 'after_or_equal:today'],
        'time'    => 'date_format:"g:i A"|required|after:'.date("g:i A",strtotime(date("g:i A"). ' + 1 hour')),
        'asignatura' => ['required', 'numeric'],
        'numerohoras' => ['required', 'numeric'],

      ]);
    }

    public function envioSolicitud(Request $request){
        $data = $this->solicitudValidator($request->all())->validate();
        // dd($data);
        $solicitud = Petition::create([
          'direccion' => $data['direccion'],//check
          'descripcion' => $data['descripcion'],//check
          'fecha' => date('Y-m-d', strtotime($data['fecha'])),//check
          'hora' => date('H:i', strtotime($data['time'])),//check
          'asignatura_id' => $data['asignatura'],//check
          'numerohoras' => $data['numerohoras'],//check
          'valor' => ($data['numerohoras']*17000),//check
          'user_id' => Auth::user()->id,//check
        ]);
        return redirect()->route('buscandoOferta',$solicitud);
    }


}
