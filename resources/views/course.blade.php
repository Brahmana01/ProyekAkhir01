@include('layouts.main')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Berita</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Berita</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- course-area -->
        <div class="course-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> News</span>
                            <h2 class="site-title">Let's Check Our <span>News Update</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($beritas as $berita)
                    <div class="col-md-6 col-lg-4">
                        <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="course-img">
                                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                                <a href="{{ route('beritas.showPublic', $berita->id) }}" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span><i class="far fa-clock"></i>{{ $berita->tanggal_update }}</span>
                                </div>
                                <h4 class="course-title">
                                    <a href="{{ route('beritas.showPublic', $berita->id) }}">{{ $berita->judul }}</a>
                                </h4>
                                <p class="course-text">
                                    {{ $berita->deskripsi_singkat }}
                                </p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-tags"></i>{{ $berita->topik }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- pagination -->
                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $beritas->links() }}
                        </ul>
                    </div>
                </div>
                <!-- pagination end -->
            </div>
        </div>
        <!-- course-area -->

    </main>

    @include('layouts.footer')