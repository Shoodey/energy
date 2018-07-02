<?php

namespace App\Http\Middleware;

use Closure;

class SetGuestUsername
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
        if(!session()->has('guest_username')){
            session()->put('guest_username', uniqid('guest-'));
        }
        return $next($request);
    }
}
