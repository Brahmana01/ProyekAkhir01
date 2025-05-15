@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Pengumuman</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <p>{{ $announcement->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <p>{{ $announcement->description }}</p>
            </div>

             <div class="mb-3">
                <label class="form-label">File</label>
                  @if($announcement->file)
                    <a href="{{ asset('storage/announcements/' . $announcement->file) }}" target="_blank">Lihat File</a>
                  @else
                    Tidak Ada File
                  @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <p>{{ $announcement->status }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Aktif</label>
                <p>{{ $announcement->active ? 'Ya' : 'Tidak' }}</p>
            </div>

            <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection