<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Events\TestingPopUp;
use App\Offer;
use App\User;
use App\Petition;
use Auth;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    //
    public function formularioOfrecimiento()
    {

      return view('user.user_ofrecimiento');

    }

    public function esperarSolicitud($id)
    {

      $solicitud = Petition::where('estado', 'pendiente')->orderBy('created_at', 'desc')->exists();
      // return dd($ofrecimiento);

      if ($solicitud) {
        // si existe le manda un evento y se va a la pagina de espera
        $solicitud = Petition::where('estado', 'pendiente')->orderBy('created_at', 'desc')->first();
        event(new TestingPopUp($solicitud->id, $id));
      }
      //se busca a si mismo para quedar en la pagina de espera hasta que se de un nuevo ofrecimiento

      $ofrecimiento = Offer::find($id);


      return view('user.user_espera_ofrecimiento')->with('ofrecimiento', $ofrecimiento);
    }

    protected function ofrecimientoValidator(array $data)
    {
      // date_default_timezone_set('America/Bogota');
      // return $data;
      return Validator::make($data, [
        'direccion' => ['required', 'string', 'max:198'],
        'asignatura' => ['required', 'numeric'],


      ]);
    }

    public function envioOfrecimiento(Request $request){
        // dd($this->ofrecimientoValidator($request->all()));
        $data = $this->ofrecimientoValidator($request->all())->validate();

        $ofrecimiento = Offer::create([
          'direccion' => $data['direccion'],//check
          // 'descripcion' => $data['descripcion'],//check
          // 'fecha' => date('Y-m-d', strtotime($data['fecha'])),//check
          // 'hora' => date('H:i', strtotime($data['time'])),//check
          'asignatura_id' => $data['asignatura'],//check
          // 'numerohoras' => $data['numerohoras'],//check
          // 'valor' => ($data['numerohoras']*17000),//check
          'user_id' => Auth::user()->id,//check
        ]);
        // event(new TestingPopUp('1')); //manda al modal 1
        return redirect()->route('buscandoSolicitud',$ofrecimiento);
    }

}
