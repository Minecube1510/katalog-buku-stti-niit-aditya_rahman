<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user() || !Auth::user()->is_admin) {
            return redirect('/home')->with('error', 'Akses ditolak, hanya untuk admin.');
        }
        return $next($request);
    }
}

?>