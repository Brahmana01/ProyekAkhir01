<!DOCTYPE html>
<html>
<head>
    <title>Detail Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Detail Video</h1>
        <p><strong>Judul:</strong> {{ $video->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $video->description }}</p>
        <video width="640" height="480" controls>
            <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <br>
        <a href="{{ route('videos.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>