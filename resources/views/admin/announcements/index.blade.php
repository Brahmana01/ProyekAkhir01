@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daftar Pengumuman</h5>
            <div class="ms-auto">
                <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">Tambah Pengumuman</a>
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
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($announcements as $announcement)
                            <tr>
                                <td>{{ $announcement->name }}</td>
                                <td>{{ $announcement->status }}</td>
                                <td>{{ $announcement->active ? 'Ya' : 'Tidak' }}</td>
                                <td>
                                    <a href="{{ route('admin.announcements.show', $announcement->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')">Hapus</button>
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