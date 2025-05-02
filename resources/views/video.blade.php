@include('layouts.main')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">dokumentasi Video</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Video</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- feature area -->
    <div class="feature-area fa2 py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Video</span>
                        <h2 class="site-title">Updated<span>Video</span></h2>
                        <p>"Selamat datang di website resmi Program Studi D3 Teknologi Informasi.
                             Melalui video dokumentasi berikut, kami mengajak Anda untuk lebih 
                             mengenal berbagai kegiatan, prestasi, serta suasana belajar yang 
                             kami bangun dengan semangat dan inovasi. Selamat menyaksikan dan 
                             selamat menjelajahi dunia kami!"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->

    <!-- video-area -->
    @foreach($videos as $video)
    <div class="video-area">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="far fa-file-video"></i> {{ $video->title }}</span>
                    </div>
                    <p class="about-text">
                        {{ $video->description }}
                    </p>
                </div>
                <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                    <div class="video-content">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="video-wrapper">
                                    <video id="video-{{ $video->id }}" width="100%" controls preload="metadata">
                                        <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    {{-- <a class="play-btn popup-youtube" data-video-id="video-{{ $video->id }}" href="#">
                                        <i class="fas fa-play"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @endforeach
    <!-- video-area end -->

</main>

@include('layouts.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const playButtons = document.querySelectorAll('.play-btn');

        playButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const videoId = this.dataset.videoId;
                const video = document.getElementById(videoId);
                video.play();
            });
        });
    });
</script>