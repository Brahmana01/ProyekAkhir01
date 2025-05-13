<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Import Storage facade

class LecturerController extends Controller
{
    // Middleware untuk otorisasi (hanya admin yang boleh akses)
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan user sudah login
        $this->middleware('admin'); // Middleware custom untuk cek role admin
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('admin.lecturers.index', compact('lecturers')); // Asumsi: view di admin/lecturers/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lecturers.create'); // Asumsi: view di admin/lecturers/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:lecturers|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|unique:lecturers|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
        ]);

        $data = $request->except('image'); // Ambil semua input kecuali image
        $data['created_by'] = Auth::id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/lecturers', $imageName); // Simpan di storage/app/public/lecturers
            $data['image'] = 'lecturers/' . $imageName; // Simpan path relatif ke database
        }

        Lecturer::create($data);

        return redirect()->route('lecturers.index')->with('success', 'Lecturer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        return view('admin.lecturers.show', compact('lecturer')); // Asumsi: view di admin/lecturers/show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        return view('admin.lecturers.edit', compact('lecturer')); // Asumsi: view di admin/lecturers/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'nip' => 'required|max:255|unique:lecturers,nip,' . $lecturer->id, // Ignore NIP saat ini untuk validasi unique
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:lecturers,email,' . $lecturer->id, // Ignore email saat ini untuk validasi unique
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
        ]);

        $data = $request->except('image'); // Ambil semua input kecuali image
        $data['updated_by'] = Auth::id();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($lecturer->image) {
                Storage::delete('public/' . $lecturer->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/lecturers', $imageName); // Simpan di storage/app/public/lecturers
            $data['image'] = 'lecturers/' . $imageName; // Simpan path relatif ke database
        }

        $lecturer->update($data);

        return redirect()->route('lecturers.index')->with('success', 'Lecturer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        // Hapus gambar jika ada
        if ($lecturer->image) {
            Storage::delete('public/' . $lecturer->image);
        }

        $lecturer->delete();

        return redirect()->route('lecturers.index')->with('success', 'Lecturer deleted successfully.');
    }
}