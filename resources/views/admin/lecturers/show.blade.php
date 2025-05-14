@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Dosen</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">NIP:</label>
                <p>{{ $lecturer->nip }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <p>{{ $lecturer->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Gelar S1:</label>
                <p>{{ $lecturer->bachelor_degree }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Gelar S2:</label>
                <p>{{ $lecturer->master_degree }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Gelar S3:</label>
                <p>{{ $lecturer->doctor_degree }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Status:</label>
                <p>{{ $lecturer->status }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Pengalaman:</label>
                <p>{{ $lecturer->experiences }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <p>{{ $lecturer->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar:</label>
                @if($lecturer->image)
                    <img src="{{ asset('storage/' . $lecturer->image) }}" alt="Gambar Dosen" width="200">
                @else
                    <p>Tidak ada gambar</p>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Aktif:</label>
                <p>{{ $lecturer->active ? 'Ya' : 'Tidak' }}</p>
            </div>

            <a href="{{ route('admin.lecturers.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection