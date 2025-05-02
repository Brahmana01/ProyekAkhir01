<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 'admin') { // Asumsikan ada kolom 'role' di tabel users
            return $next($request);
        }

        // Jika bukan admin, redirect atau tampilkan error
        return redirect('/home')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        // Atau, jika Anda ingin menampilkan halaman error:
        // abort(403, 'Unauthorized.');
    }
}