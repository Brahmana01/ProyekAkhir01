@include('layouts.main')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Prestasi</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Prestasi</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- research area -->
        <div class="research-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Prestasi </span>
                            <h2 class="site-title">Prestasi <span>D3 Teknologi Informasi</span></h2>
                            <p>Di sini, kami menampilkan berbagai pencapaian membanggakan dari mahasiswa, dosen,
                                dan seluruh civitas akademika kami sebagai bukti dedikasi dan semangat unggul
                                dalam dunia teknologi dan inovasi.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  @foreach($prestasies as $prestasi)
                    <div class="col-md-6 col-lg-4">
                        <div class="research-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="research-img">
                                <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" alt="{{ $prestasi->judul }}">
                            </div>
                            <div class="research-content">
                                <h3 class="research-title">
                                  {{ $prestasi->judul }}
                                </h3>
                                <p class="research-text">
                                    {{ $prestasi->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
        <!-- research area end -->

    </main>

@include('layouts.footer')