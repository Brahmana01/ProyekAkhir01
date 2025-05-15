<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all();
        return view('admin.achievements.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'year' => 'required|integer',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi image
            'level' => 'required|in:internasional,nasional,provinsi/wilayah,lokal',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'position' => 'required|integer',
            'role' => 'required|in:mahasiswa,dosen',
            'type' => 'required|in:akademik,non-akademik',
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
            $image->storeAs('public/achievements', $imageName);
            $data['image'] = $imageName;
        }

        // Set created_by dan updated_by (contoh, ambil dari user yang login)
        $data['created_by'] = auth()->check() ? auth()->user()->id : null;
        $data['updated_by'] = auth()->check() ? auth()->user()->id : null;
        $data['active'] = $request->input('active', 1);

        Achievement::create($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Pencapaian berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        return view('admin.achievements.show', compact('achievement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
        $validator = Validator::make($request->all(), [
             'year' => 'required|integer',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi image
            'level' => 'required|in:internasional,nasional,provinsi/wilayah,lokal',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'position' => 'required|integer',
            'role' => 'required|in:mahasiswa,dosen',
            'type' => 'required|in:akademik,non-akademik',
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
            $image->storeAs('public/achievements', $imageName);
            $data['image'] = $imageName;
        }

        // Set updated_by (contoh, ambil dari user yang login)
        $data['updated_by'] = auth()->check() ? auth()->user()->id : null;
        $data['active'] = $request->input('active', 1);

        $achievement->update($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Pencapaian berhasil diperbarui.');
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
        return redirect()->route('admin.achievements.index')->with('success', 'Pencapaian berhasil dihapus.');
    }
}