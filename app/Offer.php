<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //campos que se pueden llenar del modelo de ofrecimiento
    //por parte del usuario
    protected $fillable = [
        'direccion', 'asignatura_id','user_id',
    ];

    //relacion: uno o mas ofrecimientos pertenecen a un usuario
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
