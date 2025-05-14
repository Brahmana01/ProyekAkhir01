<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Penting: extend Controller dasar
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class LecturerController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lecturers = Lecturer::all();
        return view('admin.lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi manual
        $request->validate([
            'nip' => 'required|string|max:255|unique:lecturers',
            'name' => 'required|string|max:255',
            'bachelor_degree' => 'nullable|string|max:255',
            'master_degree' => 'nullable|string|max:255',
            'doctor_degree' => 'nullable|string|max:255',
            'status' => 'required|integer',
            'experiences' => 'nullable|string',
            'email' => 'nullable|email|unique:lecturers',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => 'required|integer',
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('lecturer_images', 'public');
            $data['image'] = $imagePath;
        }

        $data['created_by'] = Auth::guard('admin')->id();
        $data['updated_by'] = Auth::guard('admin')->id();

        Lecturer::create($data);

        return redirect()->route('admin.lecturers.index')->with('success', 'Lecturer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer): View
    {
        return view('admin.lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer): View
    {
        return view('admin.lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer): RedirectResponse
    {
        // Validasi manual
        $request->validate([
            'name' => 'required|string|max:255',
            'bachelor_degree' => 'nullable|string|max:255',
            'master_degree' => 'nullable|string|max:255',
            'doctor_degree' => 'nullable|string|max:255',
            'status' => 'required|integer',
            'experiences' => 'nullable|string',
            'email' => [
                'nullable',
                'email',
                Rule::unique('lecturers')->ignore($lecturer->nip, 'nip'), // Ignore current lecturer
            ],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => 'required|integer',
        ]);

        $data = $request->all();

        // Handle image update
        if ($request->hasFile('image')) {
            if ($lecturer->image) {
                Storage::disk('public')->delete($lecturer->image);
            }
            $imagePath = $request->file('image')->store('lecturer_images', 'public');
            $data['image'] = $imagePath;
        }

        $data['updated_by'] = Auth::guard('admin')->id();

        $lecturer->update($data);

        return redirect()->route('admin.lecturers.index')->with('success', 'Lecturer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer): RedirectResponse
    {
        if ($lecturer->image) {
            Storage::disk('public')->delete($lecturer->image);
        }

        $lecturer->delete();

        return redirect()->route('admin.lecturers.index')->with('success', 'Lecturer deleted successfully.');
    }
}