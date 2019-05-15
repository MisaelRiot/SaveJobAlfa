<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Validacion extends Model
{
    //
    protected $fillable = [
        'fechaVencimiento', 'estado',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function admin()
    {
      return $this->belongsTo('App\Admin');
    }
}
}
