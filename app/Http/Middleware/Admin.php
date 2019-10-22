<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        
        if (Auth::guard("admin")->check() && Auth::guard("admin")->user()->is_active == 1) {
            return $next($request);
        } else {
            $request->session()->flush();
            $request->session()->regenerate();
            
            return redirect()->route('admin.login');
        }

    }
}
