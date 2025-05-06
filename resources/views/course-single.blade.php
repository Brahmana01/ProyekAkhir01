@include('layouts.main')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Detail Berita</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('beritas.indexPublic') }}">Berita</a></li>
                    <li class="active">Detail Berita</li>  <!-- Diubah karena sekarang menampilkan daftar detail -->
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- blog-single-area -->
        <div class="blog-single-area py-120">
            <div class="container">
                <div class="row">
                    @foreach($beritas as $berita)  <!-- Perulangan foreach ditambahkan -->
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb">
                                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                                </div>
                                <div class="blog-content mt-30">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <a href="#"><i class="far fa-user"></i>By Admin</a>
                                            <a href="#"><i class="far fa-calendar-alt"></i>{{ $berita->tanggal_update }}</a>
                                        </div>
                                        <div class="blog-meta-right">
                                            <a href="#"><i class="far fa-eye"></i>2.5k Views</a>
                                        </div>
                                    </div>
                                    <h2 class="blog-title">
                                        {{ $berita->judul }}
                                    </h2>
                                    <p>
                                        {{ $berita->keterangan }}
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach <!-- Penutup foreach -->
                </div>
            </div>
        </div>
        <!-- blog-single-area end -->

    </main>

    @include('layouts.footer')