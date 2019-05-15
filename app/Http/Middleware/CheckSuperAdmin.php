<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if (!(Auth::guard($guard)->user()->is_super)) {
          //decir que solo los super usuarios pueden realizar esta acción
          return dd(Auth::guard($guard)->user()->is_super);
      }

      return $next($request);
    }
}
