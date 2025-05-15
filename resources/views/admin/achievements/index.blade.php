@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daftar Pencapaian</h5>
            <div class="ms-auto">
                <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Tambah Pencapaian</a>
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
                            <th>Tahun</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Level</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Posisi</th>
                            <th>Role</th>
                            <th>Tipe</th>
                            <th>Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($achievements as $achievement)
                            <tr>
                                <td>{{ $achievement->year }}</td>
                                <td>{{ $achievement->name }}</td>
                                <td>
                                    @if($achievement->image)
                                        <img src="{{ asset('storage/achievements/' . $achievement->image) }}" alt="{{ $achievement->name }}" width="50">
                                    @else
                                        Tidak Ada Gambar
                                    @endif
                                </td>
                                <td>{{ $achievement->level }}</td>
                                <td>{{ $achievement->start_date }}</td>
                                <td>{{ $achievement->end_date }}</td>
                                <td>{{ $achievement->position }}</td>
                                <td>{{ $achievement->role }}</td>
                                <td>{{ $achievement->type }}</td>
                                <td>{{ $achievement->active ? 'Ya' : 'Tidak' }}</td>
                                <td>
                                    <a href="{{ route('admin.achievements.show', $achievement->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('admin.achievements.edit', $achievement->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.achievements.destroy', $achievement->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pencapaian ini?')">Hapus</button>
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