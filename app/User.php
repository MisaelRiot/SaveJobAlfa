<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname',
        'documento', 'tipodocumento', 'fechaNacimiento',
        'telefono', 'direccion', 'institucion',
        'certificado', 'foto', 'terminosCondiciones',
        'isValidated', 'isConected','estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function validacion()
    {
        return $this->hasOne('App\Validacion');
    }

    public function petition()
    {
      return $this->hasMany('App\Petition');
    }

    public function offer()
    {
      return $this->hasMany('App\Offer');
    }
}
