<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Untuk mendapatkan user yang login

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos')); // Buat view: resources/views/admin/videos/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create'); // Buat view: resources/views/admin/videos/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|url', // Validasi link harus berupa URL
        ]);

        Video::create([
            'title' => $request->title,
            'link' => $request->link,
            'created_by' => Auth::id(), // ID user yang login
            'updated_by' => Auth::id(),
            'active' => $request->active ? 1 : 0, // Ternary operator untuk active
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video')); // Buat view: resources/views/admin/videos/show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video')); // Buat view: resources/views/admin/videos/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|url',
        ]);

        $video->update([
            'title' => $request->title,
            'link' => $request->link,
            'updated_by' => Auth::id(),
            'active' => $request->active ? 1 : 0,
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil dihapus.');
    }
}