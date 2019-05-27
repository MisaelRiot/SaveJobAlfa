<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    //
    protected $guarded = [];

    public function facultades()
    {
      return $this->hasMany('App\Facultad');
    }
}
