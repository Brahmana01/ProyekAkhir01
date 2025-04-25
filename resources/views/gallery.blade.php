@include('layouts.main')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Gallery</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- gallery-area -->
    <div class="gallery-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
                        <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row popup-gallery">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('images/galleries/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('images/galleries/' . $gallery->image) }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- gallery-area end -->

</main>

@include('layouts.footer')