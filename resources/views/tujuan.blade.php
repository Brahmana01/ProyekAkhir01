@include('layouts.main')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Tujuan Del/D3 Teknologi Informasi</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Tujuan</li>
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
                            <div class="department-details-img mb-30">
                                <img src="assets/img/department/single.jpg" alt="thumb" class="img-fluid rounded">
                            </div>

                            <div class="my-4">
                                <h3 class="mb-3"><strong>Tujuan</strong></h3>
                                <p>Tujuan dari program studi ini adalah:</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle mr-2 text-success"></i>
                                        Menghasilkan lulusan yang memiliki kemampuan dan keahlian untuk membangun aplikasi berskala besar dengan mengikuti seluruh fase pembangunan perangkat lunak dengan benar dan membuat dokumentasi lengkap dari proses pengembangan perangkat lunak serta memiliki kemampuan dalam proses pengujian dan pemeliharaan perangkat lunak serta memiliki keinginan untuk selalu mengembangkan diri dan meningkatkan keterampilan dan pengetahuan di bidang Teknik Informatika.
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle mr-2 text-success"></i>
                                        Menciptakan dan menyelenggarakan iklim akademik yang kondusif dengan selalu menerapkan prosedur operasi standar.
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle mr-2 text-success"></i>
                                        Meningkatkan manajemen pendidikan dan kompetensi dosen dan pegawai secara profesional
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle mr-2 text-success"></i>
                                        Memberikan kesempatan kepada anak desa yang kurang mampu secara ekonomi dan memiliki kemampuan akademik untuk mengejar cita-citanya di bidang teknologi informatika.
                                    </li>
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