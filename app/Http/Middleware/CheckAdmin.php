<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check()){// Check udah Login atau belum
            if(auth()->user()->role->role_name == 'admin'){
                return $next($request);
            }
            else{
                return redirect()->route('login');
                // return abort(401);
            }
        }
        return redirect()->route('dashboard');
    }
}