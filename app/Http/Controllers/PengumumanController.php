<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function indexPublic()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('blog', compact('pengumuman'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('pengumuman.index', compact('pengumuman'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_pengumuman' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_update_pengumuman' => 'nullable|date',
            'keterangan_lengkap_pengumuman' => 'nullable',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $pathGambar = $gambar->storeAs('public/pengumuman', $namaGambar);
            $input['gambar'] = $namaGambar;
        }

        Pengumuman::create($input);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }


    public function showPublic($id) // Tambahkan parameter $id
    {
        $pengumuman = Pengumuman::findOrFail($id); // Atau gunakan find() jika Anda ingin menangani kasus di mana ID tidak ditemukan
        return view('blog-single', compact('pengumuman'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul_pengumuman' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_update_pengumuman' => 'nullable|date',
            'keterangan_lengkap_pengumuman' => 'nullable',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            if ($pengumuman->gambar) {
                Storage::delete('public/pengumuman/' . $pengumuman->gambar);
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $pathGambar = $gambar->storeAs('public/pengumuman', $namaGambar);
            $input['gambar'] = $namaGambar;
        } else {
            unset($input['gambar']);
        }

        $pengumuman->update($input);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->gambar) {
            Storage::delete('public/pengumuman/' . $pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}