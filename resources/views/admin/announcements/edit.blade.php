@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Pengumuman</h5>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                 <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $announcement->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $announcement->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="PREVIEW" {{ old('status', $announcement->status) == 'PREVIEW' ? 'selected' : '' }}>PREVIEW</option>
                        <option value="PUBLISH" {{ old('status', $announcement->status) == 'PUBLISH' ? 'selected' : '' }}>PUBLISH</option>
                    </select>
                </div>

                 <div class="mb-3">
                    <label for="active" class="form-label">Aktif</label>
                    <select class="form-select" id="active" name="active">
                        <option value="1" {{ old('active', $announcement->active) == '1' ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ old('active', $announcement->active) == '0' ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection