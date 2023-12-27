<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    // AdminMiddleware.php
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            // Jika peran pengguna adalah 'user', biarkan mereka melanjutkan
            if (auth()->user()->role === 'user') {
                return $next($request);
            }
            // Jika peran pengguna adalah 'admin', arahkan mereka ke '/admin'
            elseif (auth()->user()->role === 'admin') {
                return redirect('/home');
            }
        }

        return redirect()->back();
        //abort(403, 'Anda tidak memiliki izin.');
    }
}