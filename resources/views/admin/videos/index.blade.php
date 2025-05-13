@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daftar Video</h5>
            <div class="ms-auto">
                <a href="{{ route('admin.videos.create') }}" class="btn btn-primary">Tambah Video</a>
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
                            <th>Judul</th>
                            <th>Link</th>
                            <th>Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                            <tr>
                                <td>{{ $video->id }}</td>
                                <td>{{ $video->title }}</td>
                                <td><a href="{{ $video->link }}" target="_blank">{{ $video->link }}</a></td>
                                <td>{{ $video->active ? 'Ya' : 'Tidak' }}</td>
                                <td>
                                    <a href="{{ route('admin.videos.show', $video->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus video ini?')">Hapus</button>
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