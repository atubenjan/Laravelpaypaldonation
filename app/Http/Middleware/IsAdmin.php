<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->email === 'admin@example.com') {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have admin access.');
    }
}

