@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Pencapaian</h5>
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

            <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="year" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $achievement->year) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $achievement->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($achievement->image)
                        <img src="{{ asset('storage/achievements/' . $achievement->image) }}" alt="{{ $achievement->name }}" width="50">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-select" id="level" name="level" required>
                        <option value="internasional" {{ old('level', $achievement->level) == 'internasional' ? 'selected' : '' }}>Internasional</option>
                        <option value="nasional" {{ old('level', $achievement->level) == 'nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="provinsi/wilayah" {{ old('level', $achievement->level) == 'provinsi/wilayah' ? 'selected' : '' }}>Provinsi/Wilayah</option>
                        <option value="lokal" {{ old('level', $achievement->level) == 'lokal' ? 'selected' : '' }}>Lokal</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $achievement->start_date) }}" required>
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $achievement->end_date) }}" required>
                </div>

                <div class="mb-3">
                    <label for="position" class="form-label">Posisi</label>
                    <input type="number" class="form-control" id="position" name="position" value="{{ old('position', $achievement->position) }}" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="mahasiswa" {{ old('role', $achievement->role) == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                        <option value="dosen" {{ old('role', $achievement->role) == 'dosen' ? 'selected' : '' }}>Dosen</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipe</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="akademik" {{ old('type', $achievement->type) == 'akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="non-akademik" {{ old('type', $achievement->type) == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label">Aktif</label>
                    <select class="form-select" id="active" name="active">
                        <option value="1" {{ old('active', $achievement->active) == '1' ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ old('active', $achievement->active) == '0' ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection