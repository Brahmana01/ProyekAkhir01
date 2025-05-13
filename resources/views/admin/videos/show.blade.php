@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Video</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Judul:</label>
                        <p>{{ $video->title }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link:</label>
                        <p>
                            <a href="{{ $video->link }}" target="_blank">{{ $video->link }}</a>
                        </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status:</label>
                        <p>
                            @if($video->active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-danger">Tidak Aktif</span>
                            @endif
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Dibuat oleh:</label>
                        <p>{{ $video->created_by }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Diubah oleh:</label>
                        <p>{{ $video->updated_by }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Dibuat:</label>
                        <p>{{ $video->created_at }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Diubah:</label>
                        <p>{{ $video->updated_at }}</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">
                <i class="ph-arrow-left me-2"></i>
                Kembali ke Daftar
            </a>
        </div>
    </div>
@endsection