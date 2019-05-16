<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    //campos que el usuario puede llenar en la solicitud
    protected $fillable = [
        'direccion', 'descripcion', 'fecha', 'asignatura_id', 'valor',
        'user_id', 'hora', 'numerohoras',
    ];

    //relacion: uno o mas solicitudes pertenecen a un usuario
    public function user()
    {
      return $this->belongsTo('App\User');
    }

}
