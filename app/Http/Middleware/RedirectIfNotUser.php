<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotUser
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('user')->check()) {
            return redirect()->route('user.login');
        }

        return $next($request);
    }
}
