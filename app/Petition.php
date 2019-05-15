<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    //
    protected $fillable = [
        'direccion', 'descripcion', 'fecha', 'asignatura',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
    
}
