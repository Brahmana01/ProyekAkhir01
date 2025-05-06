<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function indexPublic()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('course', compact('beritas')); // Pastikan view 'course' ada
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.beritas.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.beritas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'topik' => 'required',
            'deskripsi_singkat' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
            'tanggal_update' => 'nullable|date',
        ]);

        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $pathGambar = $gambar->storeAs('public/berita', $namaGambar);

        Berita::create([
            'judul' => $request->judul,
            'topik' => $request->topik,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'gambar' => $namaGambar,
            'keterangan' => $request->keterangan,
            'tanggal_update' => $request->tanggal_update,
        ]);

        return redirect()->route('admin.beritas.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function showPublic(Berita $berita)
    {
        return view('course-single-test', compact('berita')); // Pastikan view 'course-single' ada
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('admin.beritas.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('admin.beritas.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'topik' => 'required',
            'deskripsi_singkat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
            'tanggal_update' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            Storage::delete('public/berita/' . $berita->gambar);

            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $pathGambar = $gambar->storeAs('public/berita', $namaGambar);

            $berita->update([
                'judul' => $request->judul,
                'topik' => $request->topik,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'gambar' => $namaGambar,
                'keterangan' => $request->keterangan,
                'tanggal_update' => $request->tanggal_update,
            ]);
        } else {
            $berita->update([
                'judul' => $request->judul,
                'topik' => $request->topik,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'keterangan' => $request->keterangan,
                'tanggal_update' => $request->tanggal_update,
            ]);
        }

        return redirect()->route('admin.beritas.index')
            ->with('success', 'Berita berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        // Hapus gambar terkait
        Storage::delete('public/berita/' . $berita->gambar);

        $berita->delete();

        return redirect()->route('admin.beritas.index') // PERBAIKI TYPO DI SINI
            ->with('success', 'Berita berhasil dihapus.');
    }
}