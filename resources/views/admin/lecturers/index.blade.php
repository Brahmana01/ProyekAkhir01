@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daftar Dosen</h5>
            <div class="ms-auto">
                <a href="{{ route('lecturers.create') }}" class="btn btn-primary">Tambah Dosen</a>
            </div>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lecturers as $lecturer)
                            <tr>
                                <td>{{ $lecturer->id }}</td>
                                <td>{{ $lecturer->nip }}</td>
                                <td>{{ $lecturer->name }}</td>
                                <td>{{ $lecturer->email }}</td>
                                <td>{{ $lecturer->status }}</td>
                                <td>{{ $lecturer->active ? 'Ya' : 'Tidak' }}</td>
                                <td>
                                    <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus dosen ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection