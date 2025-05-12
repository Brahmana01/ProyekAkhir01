<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login'); // Sesuaikan dengan nama view Anda
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Jika Anda memiliki tabel `admins` terpisah:
        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            return redirect()->intended(route('admin.dashboard')); // Ganti dengan route dashboard admin Anda
        }

        // Jika Anda menggunakan tabel `users` dan ingin memfilter berdasarkan role/status:
        // $user = User::where('email', $request->email)->first();
        // if ($user && $user->isAdmin() && Auth::attempt($credentials, $request->remember)) {
        //     return redirect()->intended(route('admin.dashboard'));
        // }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout(); // Atau Auth::logout() jika Anda menggunakan tabel users
        return redirect(route('admin.login')); // Ganti dengan route login admin Anda
    }
}