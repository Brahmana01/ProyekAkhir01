@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tambah Pencapaian</h5>
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

            <form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{ old('year') }}" required>
                </div>

                <div class="mb-3">
                    <label for="started_date" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="started_date" name="started_date" value="{{ old('started_date') }}" required>
                </div>

                <div class="mb-3">
                    <label for="ended_date" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="ended_date" name="ended_date" value="{{ old('ended_date') }}" required>
                </div>

                <div class="mb-3">
                    <label for="position" class="form-label">Posisi</label>
                    <input type="number" class="form-control" id="position" name="position" value="{{ old('position') }}" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Peran</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="mahasiswa" {{ old('role') == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                        <option value="dosen" {{ old('role') == 'dosen' ? 'selected' : '' }}>Dosen</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipe</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="akademik" {{ old('type') == 'akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="non-akademik" {{ old('type') == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-select" id="level" name="level" required>
                        <option value="internasional" {{ old('level') == 'internasional' ? 'selected' : '' }}>Internasional</option>
                        <option value="nasional" {{ old('level') == 'nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="provinsi/wilayah" {{ old('level') == 'provinsi/wilayah' ? 'selected' : '' }}>Provinsi/Wilayah</option>
                        <option value="lokal" {{ old('level') == 'lokal' ? 'selected' : '' }}>Lokal</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label">Aktif</label>
                    <select class="form-select" id="active" name="active">
                        <option value="1" {{ old('active', 1) == '1' ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ old('active') == '0' ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection