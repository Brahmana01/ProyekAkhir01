<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman lain atau tampilkan pesan error
        return redirect('/home')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.'); // Ganti '/home' dengan halaman yang sesuai
    }
}