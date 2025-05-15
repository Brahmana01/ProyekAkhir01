<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage Facade
use Illuminate\Support\Facades\Validator;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all(); // Ambil semua data achievement
        return view('admin.achievements.index', compact('achievements')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.achievements.create'); // Tampilkan form create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi image
            'year' => 'required|integer',
            'started_date' => 'required|date',
            'ended_date' => 'required|date',
            'position' => 'required|integer',
            'role' => 'required|in:mahasiswa,dosen',
            'type' => 'required|in:akademik,non-akademik',
            'level' => 'required|in:internasional,nasional,provinsi/wilayah,lokal',
            'active' => 'nullable|integer|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except('image');

        // Upload image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/achievements', $imageName); // Simpan di storage/app/public/achievements
            $data['image'] = $imageName;
        }


        // Set created_by dan updated_by (contoh, ambil dari user yang login)
        $data['created_by'] = auth()->check() ? auth()->user()->id : null;
        $data['updated_by'] = auth()->check() ? auth()->user()->id : null;
        $data['active'] = $request->input('active', 1);

        // Simpan data ke database
        Achievement::create($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement created successfully.'); // Redirect dengan pesan sukses
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        return view('admin.achievements.show', compact('achievement')); // Tampilkan detail achievement
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
          // Validasi data
          $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi image
            'year' => 'required|integer',
            'started_date' => 'required|date',
            'ended_date' => 'required|date',
            'position' => 'required|integer',
            'role' => 'required|in:mahasiswa,dosen',
            'type' => 'required|in:akademik,non-akademik',
            'level' => 'required|in:internasional,nasional,provinsi/wilayah,lokal',
            'active' => 'nullable|integer|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except('image');

        // Upload image jika ada
        if ($request->hasFile('image')) {
            // Delete old image
            if ($achievement->image) {
                Storage::delete('public/achievements/' . $achievement->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/achievements', $imageName); // Simpan di storage/app/public/achievements
            $data['image'] = $imageName;
        }

        // Set updated_by (contoh, ambil dari user yang login)
        $data['updated_by'] = auth()->check() ? auth()->user()->id : null;
        $data['active'] = $request->input('active', 1);

        $achievement->update($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement updated successfully.'); // Redirect dengan pesan sukses
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        // Delete image if exists
        if ($achievement->image) {
            Storage::delete('public/achievements/' . $achievement->image);
        }

        $achievement->delete();
        return redirect()->route('admin.achievements.index')->with('success', 'Achievement deleted successfully.'); // Redirect dengan pesan sukses
    }
}