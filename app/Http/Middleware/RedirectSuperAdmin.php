<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class RedirectSuperAdmin
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

        if ($guard == "admin" && Auth::guard($guard)->check() &&  Auth::guard($guard)->user()->is_super) {
            //decir que solo los super usuarios pueden realizar esta acción
            return redirect('/admin');
        }
        return $next($request);
    }
}
