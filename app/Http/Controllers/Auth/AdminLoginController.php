<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin_login'); // Ganti dengan path ke view login Anda
    }

    public function login(Request $request)
    {
        // Validasi data yang masuk
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6' // Password minimal 6 karakter
        ]);

        // Mencoba login
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            // Jika login berhasil
            return redirect()->intended(route('admin.dashboard')); // Ganti dengan route dashboard admin Anda
        }

        // Jika login gagal
        return redirect()->back()->withInput($request->only('username', 'remember'))->withErrors([
            'username' => 'These credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login'); // Redirect ke halaman login setelah logout
    }
}