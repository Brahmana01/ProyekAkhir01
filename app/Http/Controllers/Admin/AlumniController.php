<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    public function indexPublic()
    {
        $alumnis = Alumni::all(); // Ambil semua data alumni
        return view('alumni', compact('alumnis')); // Kirim data ke view admin
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnis = Alumni::all(); // Ambil semua data alumni
        return view('admin.alumni.index', compact('alumnis')); // Kirim data ke view admin
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alumni.create'); // Tampilkan form create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file foto
            'cerita_terbaru' => 'nullable',
            'alumni_updates' => 'nullable',
            'apa_kata' => 'nullable',
        ]);

        $alumni = new Alumni();
        $alumni->nama = $request->nama;
        $alumni->cerita_terbaru = $request->cerita_terbaru;
        $alumni->alumni_updates = $request->alumni_updates;
        $alumni->apa_kata = $request->apa_kata;

        // Handle upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();
            $path = $foto->storeAs('public/alumni', $namaFoto); // Simpan di storage/app/public/alumni
            $alumni->foto = $namaFoto; // Simpan nama file di database
        }

        $alumni->save();

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Alumni berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
        return view('admin.alumni.show', compact('alumni')); // Tampilkan detail alumni di admin
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumni $alumni)
    {
        return view('admin.alumni.edit', compact('alumni')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumni $alumni)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cerita_terbaru' => 'nullable',
            'alumni_updates' => 'nullable',
            'apa_kata' => 'nullable',
        ]);

        $alumni->nama = $request->nama;
        $alumni->cerita_terbaru = $request->cerita_terbaru;
        $alumni->alumni_updates = $request->alumni_updates;
        $alumni->apa_kata = $request->apa_kata;

        // Handle update foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($alumni->foto) {
                Storage::delete('public/alumni/' . $alumni->foto);
            }

            $foto = $request->file('foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();
            $path = $foto->storeAs('public/alumni', $namaFoto);
            $alumni->foto = $namaFoto;
        }

        $alumni->save();

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Alumni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        // Hapus foto jika ada
        if ($alumni->foto) {
            Storage::delete('public/alumni/' . $alumni->foto);
        }

        $alumni->delete();

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Alumni berhasil dihapus.');
    }

    // Metode untuk menampilkan daftar alumni di frontend (view alumni Anda)
    public function showAlumni()
    {
        $alumnis = Alumni::all(); // Ambil semua data alumni atau data yang difilter
        return view('alumni', compact('alumnis``')); // Kirim data ke view alumni
    }
}