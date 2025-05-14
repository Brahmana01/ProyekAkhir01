@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Dosen</h5>
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

            <form action="{{ route('admin.lecturers.update', $lecturer->nip) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $lecturer->nip }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $lecturer->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="bachelor_degree" class="form-label">Gelar S1</label>
                    <input type="text" class="form-control" id="bachelor_degree" name="bachelor_degree" value="{{ $lecturer->bachelor_degree }}">
                </div>

                <div class="mb-3">
                    <label for="master_degree" class="form-label">Gelar S2</label>
                    <input type="text" class="form-control" id="master_degree" name="master_degree" value="{{ $lecturer->master_degree }}">
                </div>

                <div class="mb-3">
                    <label for="doctor_degree" class="form-label">Gelar S3</label>
                    <input type="text" class="form-control" id="doctor_degree" name="doctor_degree" value="{{ $lecturer->doctor_degree }}">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1" {{ $lecturer->status == 1 ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ $lecturer->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="experiences" class="form-label">Pengalaman</label>
                    <textarea class="form-control" id="experiences" name="experiences">{{ $lecturer->experiences }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $lecturer->email }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($lecturer->image)
                        <img src="{{ asset('storage/' . $lecturer->image) }}" alt="Gambar Dosen" width="100">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label">Aktif</label>
                    <select class="form-control" id="active" name="active" required>
                        <option value="1" {{ $lecturer->active == 1 ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ $lecturer->active == 0 ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.lecturers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection