<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $allowedUsernames = ['amos', 'amiston'];

        if (auth()->check() && in_array(auth()->user()->name, $allowedUsernames)) {
            return $next($request);
        }

        abort(403, 'Acesso negado.');
    }
}
