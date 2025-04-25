<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    // Middleware untuk memastikan hanya admin yang bisa mengakses
    public function __construct()
    {
        $this->middleware('auth:admin'); // Atau tambahkan 'isAdmin' jika Anda punya middleware itu
    }

    public function index()
    {
        // Data yang ingin ditampilkan di dashboard (contoh)
        $data = [
            'admin' => Auth::guard('admin')->user(), // Data admin yang login
            'totalUsers' => 100, // Ganti dengan query ke database
            'totalProducts' => 50, // Ganti dengan query ke database
        ];

        return view('admin.dashboard', $data);
    }
}