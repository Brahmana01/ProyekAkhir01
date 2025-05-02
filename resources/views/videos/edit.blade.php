<!DOCTYPE html>
<html>
<head>
    <title>Edit Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Video</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Judul:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $video->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">File Video (kosongkan jika tidak ingin mengubah):</label>
                <input type="file" class="form-control" id="video" name="video" accept="video/mp4,video/mov,video/avi">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('videos.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>