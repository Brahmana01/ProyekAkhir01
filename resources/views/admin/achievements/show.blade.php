@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Pencapaian</h5>
        </div>

        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nama</dt>
                <dd class="col-sm-9">{{ $achievement->name }}</dd>

                <dt class="col-sm-3">Gambar</dt>
                <dd class="col-sm-9">
                    @if($achievement->image)
                        <img src="{{ asset('storage/achievements/' . $achievement->image) }}" alt="{{ $achievement->name }}" width="100">
                    @else
                        Tidak Ada Gambar
                    @endif
                </dd>

                <dt class="col-sm-3">Tahun</dt>
                <dd class="col-sm-9">{{ $achievement->year }}</dd>

                <dt class="col-sm-3">Tanggal Mulai</dt>
                <dd class="col-sm-9">{{ $achievement->started_date }}</dd>

                <dt class="col-sm-3">Tanggal Selesai</dt>
                <dd class="col-sm-9">{{ $achievement->ended_date }}</dd>

                <dt class="col-sm-3">Posisi</dt>
                <dd class="col-sm-9">{{ $achievement->position }}</dd>

                <dt class="col-sm-3">Peran</dt>
                <dd class="col-sm-9">{{ $achievement->role }}</dd>

                <dt class="col-sm-3">Tipe</dt>
                <dd class="col-sm-9">{{ $achievement->type }}</dd>

                <dt class="col-sm-3">Level</dt>
                <dd class="col-sm-9">{{ $achievement->level }}</dd>

                <dt class="col-sm-3">Aktif</dt>
                <dd class="col-sm-9">{{ $achievement->active ? 'Ya' : 'Tidak' }}</dd>
            </dl>

            <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection