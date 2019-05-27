<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    //
    protected $guarded = [];
    
    public function universidad()
    {
      return $this->belongsTo('App\Universidad');
    }
}
