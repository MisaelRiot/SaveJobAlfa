<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events\OfrecimientoNuevo;
use App\Petition;
use App\User;
use App\Offer;
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
       //establece si existe un ofrecimiento
       $ofrecimiento = Offer::where('estado', 'pendiente')->orderBy('created_at', 'desc')->exists();
       // return dd($ofrecimiento);

       if ($ofrecimiento) {
         // si existe le manda una solicitud y se va a la pagina de espera
         $ofrecimiento = Offer::where('estado', 'pendiente')->orderBy('created_at', 'desc')->first();
         event(new OfrecimientoNuevo($ofrecimiento->id,'Quiero que me enseñes'));
       }
       //se busca a si mismo para quedar en la pagina de espera hasta que se de un nuevo ofrecimiento
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
        // dd($this->solicitudValidator($request->all()));
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
