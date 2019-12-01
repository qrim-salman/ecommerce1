<?php

namespace App\Http\Middleware;

use Closure;

class CustomerMiddleware
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
        $customer = auth()->guard("web");

        if ($customer->check()) {
            return $next($request);
        }

        return back()
            ->withInput()
            ->with("info", "Untuk melanjutkan, silahkan login terlebih dahulu.");
    }
}
