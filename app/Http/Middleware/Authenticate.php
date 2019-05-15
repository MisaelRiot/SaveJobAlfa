<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // si el usuario esta intentando registrar un administrador
            // se redirige al login de administradores
            if($request->getPathInfo()=="/register/admin" || $request->getPathInfo()=="/admin")
            {
              return route('adminlogin');
            }

            return route('login');
        }
    }
}
