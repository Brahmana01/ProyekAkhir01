@include('layouts.main')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Visi Misi/D3 Teknologi Informasi</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Visi Misi</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- department-single -->
    <div class="department-single-area py-5">
        <div class="container">
            <div class="department-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="department-sidebar">

                            <div class="widget department-download">
                                <h4 class="widget-title">Link Terkait</h4>
                                <a href="http://www.del.ac.id/wp-content/uploads/2014/07/Brosur_D3TI_ITDEL_2425.pdf"><i class="far fa-file-pdf"></i> Brosur D3_TI_2024</a>
                                <a href="https://cis.del.ac.id/"><i class="far fa-link"></i> Sistem Informasi Akademik</a>
                                <a href="https://sipp.del.ac.id/"><i class="far fa-link"></i> Sistem Informasi Perpustakaan</a>
                                <a href="https://www.del.ac.id/"><i class="far fa-link"></i> Web Resmi IT Del</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="department-details">

                            <div class="my-4">
                                <h2 class="mb-3 text-center"><strong>VISI</strong></h2>
                                <h3 class="mb-3 text-center">Visi Keilmuan Program Studi Diploma Tiga Teknologi Informasi</h3>
                                <p style="font-size: 1.5em; line-height: 1.9;" class="text-justify">
                                    Menjadi prodi unggulan pada program pendidikan dan penelitian terapan di bidang pengembangan teknologi informasi berbasis transformasi digital yang inovatif yang bertaraf nasional dan berwawasan global.
                                </p>
                                <br><br>
                            </div>

                            <div class="department-details-img mb-30">
                                <img src="assets/img/visi/01.jpg" alt="thumb" class="img-fluid rounded">
                            </div><br>

                            <div class="my-4">
                                <h3 class="mb-3"><strong>KENAPA MEMILIH D3 TI ?</strong></h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-2 text-success"></i> Kurikulum yang disesuaikan dengan perkembangan industri teknologi informasi</li>
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-2 text-success"></i> Dosen yang berpengalaman dan berkualitas dalam bidangnya</li>
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-2 text-success"></i> Kemitraan dengan industri dan kampus Nasional dan Internasional</li>
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-2 text-success"></i> Pengalaman Magang selama 1 Semester untuk siap dalam industri</li>
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-2 text-success"></i> Fasilitas dan infrastruktur yang modern dan nyaman</li>
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-2 text-success"></i> Peluang bekerja lebih cepat setelah lulus</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- department-single end-->

</main>

@include('layouts.footer')