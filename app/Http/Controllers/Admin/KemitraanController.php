<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kemitraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KemitraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kemitraan = Kemitraan::all();
        return view('admin.kemitraan.index', compact('kemitraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kemitraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kemitraan' => 'required',
            'bidang_kemitraan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Contoh validasi gambar
            'deskripsi' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs('public/kemitraan', $nama_gambar); // Simpan di storage/app/public/kemitraan
            $data['gambar'] = $nama_gambar; // Simpan nama file saja di database
        }

        Kemitraan::create($data);

        return redirect()->route('admin.kemitraan.index')->with('success', 'Kemitraan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kemitraan $kemitraan)
    {
        return view('admin.kemitraan.show', compact('kemitraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kemitraan $kemitraan)
    {
        return view('admin.kemitraan.edit', compact('kemitraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kemitraan $kemitraan)
    {
        $request->validate([
            'nama_kemitraan' => 'required',
            'bidang_kemitraan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Contoh validasi gambar
            'deskripsi' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kemitraan->gambar) {
                Storage::delete('public/kemitraan/' . $kemitraan->gambar);
            }

            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs('public/kemitraan', $nama_gambar);
            $data['gambar'] = $nama_gambar;
        }

        $kemitraan->update($data);

        return redirect()->route('admin.kemitraan.index')->with('success', 'Kemitraan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kemitraan $kemitraan)
    {
        // Hapus gambar jika ada
        if ($kemitraan->gambar) {
            Storage::delete('public/kemitraan/' . $kemitraan->gambar);
        }

        $kemitraan->delete();

        return redirect()->route('admin.kemitraan.index')->with('success', 'Kemitraan berhasil dihapus.');
    }
}