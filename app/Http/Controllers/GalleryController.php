<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Tambahkan ini untuk upload file

class GalleryController extends Controller
{
    public function indexPublic()
    {
        $galleries = Gallery::all(); // Ambil semua data galeri
        return view('gallery', compact('galleries')); // Kirim data ke view
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all(); // Ambil semua data galeri
        return view('admin.galleries.index', compact('galleries')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create'); // Tampilkan form create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        $imageName = time() . '.' . $request->image->extension();

        //Simpan gambar ke folder public/images/galleries
        $request->image->move(public_path('images/galleries'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.galleries.index')
                         ->with('success', 'Gallery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('admin.galleries.show', compact('gallery')); // Tampilkan detail galeri
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        $imageName = $gallery->image; // Default: gunakan gambar yang sudah ada

        if ($request->hasFile('image')) {
            //Hapus gambar lama jika ada
            if(file_exists(public_path('images/galleries/'.$gallery->image))){
                unlink(public_path('images/galleries/'.$gallery->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/galleries'), $imageName);
        }

        $gallery->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.galleries.index')
                         ->with('success', 'Gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //Hapus gambar
        if(file_exists(public_path('images/galleries/'.$gallery->image))){
            unlink(public_path('images/galleries/'.$gallery->image));
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')
                         ->with('success', 'Gallery deleted successfully.');
    }
}