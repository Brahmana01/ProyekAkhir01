<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));  // View admin
    }

    /**
     * Show the form for creating a new resource (Admin).
     */
    public function create()
    {
        return view('admin.videos.create'); // View admin
    }

    /**
     * Store a newly created resource in storage (Admin).
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'video' => 'required|mimes:mp4,mov,avi|max:20480', // 20MB
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'video_path' => $videoPath,
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil ditambahkan.');
    }

    /**
     * Display the specified resource (Admin).
     */
    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video')); // View admin
    }

    /**
     * Show the form for editing the specified resource (Admin).
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video')); // View admin
    }

    /**
     * Update the specified resource in storage (Admin).
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'video' => 'nullable|mimes:mp4,mov,avi|max:20480', // 20MB
        ]);

        if ($request->hasFile('video')) {
            // Hapus video lama
            Storage::disk('public')->delete($video->video_path);

            // Simpan video baru
            $videoPath = $request->file('video')->store('videos', 'public');
            $video->video_path = $videoPath;
        }

        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->save();

        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage (Admin).
     */
    public function destroy(Video $video)
    {
        // Hapus file video dari storage
        Storage::disk('public')->delete($video->video_path);

        $video->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Video berhasil dihapus.');
    }

    /**
     * Display the specified resource (Public).
     */
    public function showPublic()
    {
        $videos = Video::all();
        return view('video', compact('videos')); // View public
    }
}