@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Dosen</h5>
        </div>

        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">NIP</dt>
                <dd class="col-sm-9">{{ $lecturer->nip }}</dd>

                <dt class="col-sm-3">Nama</dt>
                <dd class="col-sm-9">{{ $lecturer->name }}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $lecturer->email }}</dd>

                <dt class="col-sm-3">Gelar Sarjana</dt>
                <dd class="col-sm-9">{{ $lecturer->bachelor_degree }}</dd>

                <dt class="col-sm-3">Gelar Magister</dt>
                <dd class="col-sm-9">{{ $lecturer->master_degree }}</dd>

                <dt class="col-sm-3">Gelar Doktor</dt>
                <dd class="col-sm-9">{{ $lecturer->doctor_degree }}</dd>

                <dt class="col-sm-3">Status</dt>
                <dd class="col-sm-9">{{ $lecturer->status }}</dd>

                <dt class="col-sm-3">Pengalaman</dt>
                <dd class="col-sm-9">{{ $lecturer->experiences }}</dd>

                <dt class="col-sm-3">Gambar</dt>
                <dd class="col-sm-9">
                    @if($lecturer->image)
                        <img src="{{ asset('storage/' . $lecturer->image) }}" alt="Gambar Dosen" width="200">
                    @else
                        Tidak Ada Gambar
                    @endif
                </dd>

                <dt class="col-sm-3">Aktif</dt>
                <dd class="col-sm-9">{{ $lecturer->active ? 'Ya' : 'Tidak' }}</dd>
            </dl>

            <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection