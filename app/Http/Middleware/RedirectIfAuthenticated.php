<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      //si el usuario no es un super admin pero es un administrador es redirigido a la pantalla para administradores
      if ($guard == "admin" && Auth::guard($guard)->check() && (Auth::guard($guard)->user()->is_super == false) ) {
              //return dd('condicional 1');
              return redirect('/admin');
          }
          //si el usuario es un user loggueado es redirigido a la pantalla para usuarios !si el usuario es un admin pasando por el guest no pasa
          if ($guard != "admin" && Auth::guard($guard)->check() && !Auth::guard('admin')->check() ) {

              // si es un usuario normal autenticado tiene que fracasar aqui e ir a home
              if (!Auth::guard('admin')->check()) {
                return redirect('/home');
              }
              return redirect('/home');
          }

          // si el usuario es un super administrador y esta intentando ir al loggin normal
          // es dirigido a la pantalla para administradores
          if ($guard == "admin" && Auth::guard($guard)->check() && (Auth::guard($guard)->user()->is_super == true) ) {
                  //return dd('condicional 3');
                  if($request->getPathInfo()=="/login" || $request->getPathInfo()=='/login/admin' || $request->getPathInfo()=='/prueba' || $request->getPathInfo()=='/register')
                  {
                    return redirect('/admin');
                  }

              }

        return $next($request);
    }
}
