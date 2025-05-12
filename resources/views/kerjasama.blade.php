@include('layouts.main')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Kemitraan Kami</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Kemitraan</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- partnership area -->
    <div class="facility-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="fas fa-handshake"></i> Mitra Strategis Kami</span>
                        <h2 class="site-title">Jalinan <span>Kemitraan</span> yang Saling Menguntungkan</h2>
                        <p>Kami bangga bermitra dengan berbagai organisasi terkemuka untuk menciptakan nilai tambah dan
                            peluang bagi mahasiswa dan masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($kemitraan as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="facility-img">
                                @if($item->gambar)
                                    <img src="{{ asset('storage/kemitraan/' . $item->gambar) }}" alt="{{ $item->nama_kemitraan }}">
                                @else
                                    <img src="assets/img/partnership/default.jpg" alt="Default Image">  <!-- Gambar default jika tidak ada gambar -->
                                @endif
                            </div>
                            <div class="facility-content">
                                <h3 class="facility-title">
                                    {{ $item->nama_kemitraan }}
                                </h3>
                                <p class="facility-text">
                                    {{ $item->deskripsi }}
                                </p>
                                <div class="facility-arrow">
                                    <span class="">Bidang: {{ $item->bidang_kemitraan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- partnership area end -->

</main>

@include('layouts.footer')