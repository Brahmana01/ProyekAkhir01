<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function lecturers()
    {
        return view('teacher');
    }

    public function announcement()
    {
        return view('announcement');
    }
    public function alumni(){
        return view('alumni');
    }
    public function kemitraan(){
        return view('kerjasama');
    }
}
