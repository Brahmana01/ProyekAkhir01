@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tambah Dosen Baru</h5>
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

            <form action="{{ route('lecturers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="bachelor_degree" class="form-label">Gelar Sarjana</label>
                    <input type="text" class="form-control" id="bachelor_degree" name="bachelor_degree" value="{{ old('bachelor_degree') }}">
                </div>

                <div class="mb-3">
                    <label for="master_degree" class="form-label">Gelar Magister</label>
                    <input type="text" class="form-control" id="master_degree" name="master_degree" value="{{ old('master_degree') }}">
                </div>

                <div class="mb-3">
                    <label for="doctor_degree" class="form-label">Gelar Doktor</label>
                    <input type="text" class="form-control" id="doctor_degree" name="doctor_degree" value="{{ old('doctor_degree') }}">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="0">Tidak Aktif</option>
                        <option value="1">Aktif</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="experiences" class="form-label">Pengalaman</label>
                    <textarea class="form-control" id="experiences" name="experiences">{{ old('experiences') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label">Aktif</label>
                    <select class="form-select" id="active" name="active">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection