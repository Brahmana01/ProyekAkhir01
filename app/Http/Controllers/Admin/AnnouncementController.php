<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Validasi file
            'status' => 'required|in:PREVIEW,PUBLISH',
            'active' => 'nullable|integer|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except('file');

        // Upload file jika ada
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/announcements', $fileName);
            $data['file'] = $fileName;
        }

        // Set created_by dan updated_by (contoh, ambil dari user yang login)
        $data['created_by'] = auth()->check() ? auth()->user()->id : null;
        $data['updated_by'] = auth()->check() ? auth()->user()->id : null;
        $data['active'] = $request->input('active', 1);

        Announcement::create($data);

        return redirect()->route('admin.announcements.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('admin.announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Validasi file
            'status' => 'required|in:PREVIEW,PUBLISH',
            'active' => 'nullable|integer|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except('file');

        // Upload file jika ada
        if ($request->hasFile('file')) {
            // Delete old file
            if ($announcement->file) {
                Storage::delete('public/announcements/' . $announcement->file);
            }

            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/announcements', $fileName);
            $data['file'] = $fileName;
        }

        // Set updated_by (contoh, ambil dari user yang login)
        $data['updated_by'] = auth()->check() ? auth()->user()->id : null;
        $data['active'] = $request->input('active', 1);

        $announcement->update($data);

        return redirect()->route('admin.announcements.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        // Delete file if exists
        if ($announcement->file) {
            Storage::delete('public/announcements/' . $announcement->file);
        }

        $announcement->delete();
        return redirect()->route('admin.announcements.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}