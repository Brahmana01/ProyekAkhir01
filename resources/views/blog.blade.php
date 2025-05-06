@include('layouts.main')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Pengumuman</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Pengumuman</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- blog area -->
        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-bullhorn"></i> Pengumuman</span>
                            <h2 class="site-title">Pengumuman <span>Terbaru</span></h2>
                            <p>Informasi terbaru dan penting dari kami.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($pengumuman as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> {{ $item->tanggal_update_pengumuman }}</div>
                            <div class="blog-item-img">
                                @if($item->gambar)
                                    <img src="{{ asset('storage/pengumuman/' . $item->gambar) }}" alt="{{ $item->judul_pengumuman }}">
                                @else
                                    <img src="{{ asset('assets/img/default-image.jpg') }}" alt="No Image"> <!-- Gambar default jika tidak ada -->
                                @endif
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="{{ route('pengumuman.showPublic', $item->id) }}">{{ $item->judul_pengumuman }}</a>
                                </h4>
                                <a class="theme-btn" href="{{ route('pengumuman.showPublic', $item->id) }}">Lihat Selengkapnya <i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- pagination -->
                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $pengumuman->links() }}
                        </ul>
                    </div>
                </div>
                <!-- pagination end -->
            </div>
        </div>
        <!-- blog area end -->

    </main>

    @include('layouts.footer')