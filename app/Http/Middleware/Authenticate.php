<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
