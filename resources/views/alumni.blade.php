@include('layouts.main')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Alumni</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Alumni</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- testimonial area -->
    <div class="testimonial-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Testimonials</span>
                        <h2 class="site-title">What Our Alumni <span>Say's</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                    </div>
                </div>
            </div>

            @if(count($alumnis) > 1)
                <!-- Lebih dari satu alumni, gunakan slider -->
                <div class="testimonial-slider owl-carousel owl-theme">
                    @foreach($alumnis as $alumni)
                        <div class="testimonial-item">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    {{ $alumni->cerita_terbaru }}
                                </p>
                            </div>
                            <div class="testimonial-content">
                                <div class="testimonial-author-img">
                                    @if($alumni->foto)
                                        <img src="{{ asset('storage/alumni/' . $alumni->foto) }}" alt="{{ $alumni->nama }}">
                                    @else
                                        <img src="assets/img/testimonial/default.jpg" alt="Default Image">
                                    @endif
                                </div>
                                <div class="testimonial-author-info">
                                    <h4>{{ $alumni->nama }}</h4>
                                    <p>Alumni</p>
                                </div>
                            </div>
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Hanya satu alumni atau tidak ada, tampilkan tanpa slider -->
                @foreach($alumnis as $alumni)
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                {{ $alumni->apa_kata }}
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                @if($alumni->foto)
                                    <img src="{{ asset('storage/alumni/' . $alumni->foto) }}" alt="{{ $alumni->nama }}">
                                @else
                                    <img src="assets/img/testimonial/default.jpg" alt="Default Image">
                                @endif
                            </div>
                            <div class="testimonial-author-info">
                                <h4>{{ $alumni->nama }}</h4>
                                <p>Alumni</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
    <!-- testimonial area end -->


</main>

@include('layouts.footer')

<script>
    $(document).ready(function() {
        // Hanya inisialisasi Owl Carousel jika ada lebih dari satu alumni
        if ($('.testimonial-slider .testimonial-item').length > 1) {
            $('.testimonial-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        }
    });
</script>