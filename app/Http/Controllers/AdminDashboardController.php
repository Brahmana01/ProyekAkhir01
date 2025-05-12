<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user(); // Ambil data admin yang login
        return view('admin.dashboard', compact('admin')); // Kirim data ke view
    }
}