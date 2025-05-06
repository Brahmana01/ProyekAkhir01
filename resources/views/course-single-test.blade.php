<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Website D3 Teknologi Informasi</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="https://th.bing.com/th/id/OIP.jFB7oMhq7TERFdcJ9ALdtwAAAA?rs=1&pid=ImgDetMain">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>


<body>




<header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="https://www.facebook.com/share/1HUGES27rt/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/d3tidel_2024?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                            <a href="https://youtube.com/@d3teknologiinformasiitdel350?si=NQroF3kKSlHKiSQB"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-contact">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-location-dot"></i> Sitoluama,Laguboti,Toba</a>
                                </li>
                                <li>
                                    <a href="mailto:info@example.com"><i class="far fa-envelopes"></i> diploma3tiDel@gmail.com</a>
                                </li>

                                <li>
                                    <a href="tel:+620632331234"><i class="far fa-phone-volume"></i> 0632-331234</a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.login') }}">
                                        <i class="far fa-user"></i>
                                        Admin Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="index">
                        <img src="http://www.del.ac.id/wp-content/uploads/2015/06/logox.png"  alt="D3 Teknologi Informasi">    
                    </a>
                    
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="index">Home</a>
                            </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil Prodi</a>
                                    <div class="mega-content">
                                    <div class="container-fluid">
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="sejarah">Sejarah</a></li>
                                        <li><a class="dropdown-item" href="about">Tentang D3 TI</a></li>
                                        <li><a class="dropdown-item" href="visimisi">Visi Misi</a></li>
                                        <li><a class="dropdown-item" href="strukturorganisasi">Struktur organisasi</a></li>
                                        <li><a class="dropdown-item" href="tujuan">Tujuan</a></li>
                                        <li><a class="dropdown-item" href="strategi">Strategi Pembelajaran</a></li>
                                    </ul>
                                </li>

                            
                            <li class="nav-item"><a class="nav-link" href="kurikulum">Kurikulum</a></li>
      
                            <li class="nav-item"><a class="nav-link" href="{{route('beritas.indexPublic')}}">Berita</a></li>
  
                            <li class="nav-item"><a class="nav-link" href="blog">Pengumuman</a></li>      
                            
                            <li class="nav-item"><a class="nav-link" href="teacher">Lecturers</a></li>     

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dokumentasi</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('galleries.index')}}">Galeri</a></li>
                                    <li><a class="dropdown-item" href="{{ route('videos.showPublic')}}">Video</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">HubConnect</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="contact">Kontak</a></li>
                                    <li><a class="dropdown-item" href="sosmed">Sosial Media</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item"><a class="nav-link" href="{{ route('prestasies.indexPublic')}}">Prestasi</a></li>

                            <li class="nav-item"><a class="nav-link" href="course-2">Prospek_Karir</a></li>

                            <li class="nav-item"><a class="nav-link" href="alumni">Alumni</a></li>


                            <li class="nav-item"><a class="nav-link" href="facility">Fasilitas</a></li> 


                            <li class="nav-item"><a class="nav-link" href="scholarship">Beasiswa</a></li> 


                            <li class="nav-item"><a class="nav-link" href="kerjasama">Kerjasama</a></li> 
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $berita->judul ?? 'Berita' }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('beritas.indexPublic') }}">Berita</a></li>
                <li class="active">{{ $berita->judul ?? 'Detail Berita' }}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course-single -->
    <div class="course-single-area py-120">
        <div class="container">
            <div class="course-single-wrapper">
                <div class="row">
                    <!-- Sidebar (Anda bisa menyesuaikan ini dengan data yang relevan) -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="course-single-sidebar">
                            <div class="widget">
                                <h4 class="widget-title">Info Berita</h4>
                                <div class="course-single-info">
                                    <!-- Contoh: Menampilkan tanggal update -->
                                    <div class="single-info rattings">
                                        <i class="far fa-clock"></i>
                                        <div class="single-info-content">
                                            <h4>Tanggal Update</h4>
                                            <span>{{ $berita->tanggal_update ?? 'Tidak Ada' }}</span>
                                        </div>
                                    </div>
                                    <!-- Anda bisa menambahkan info lain di sini sesuai kebutuhan -->
                                </div>
                                <!-- Tombol Enroll Now (Anda bisa mengganti ini dengan link yang sesuai) -->
                                <a href="#" class="theme-btn">Bagikan Berita <i class="fas fa-arrow-right-long"></i></a>
                            </div>
                            <!-- Widget Course Features (Anda bisa menyesuaikan ini dengan data yang relevan) -->
                            <div class="widget">
                                <h4 class="widget-title">Fitur Berita</h4>
                                <ul class="course-feature-list">
                                    <li><i class="far fa-tags"></i> Topik <span>{{ $berita->topik ?? 'Tidak Ada' }}</span></li>
                                    <!-- Anda bisa menambahkan fitur lain di sini sesuai kebutuhan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar -->

                    <!-- Konten Utama -->
                    <div class="col-xl-8 col-lg-8">
                        <div class="course-details">
                            <!-- Gambar Berita -->
                            <div class="course-details-img mb-30">
                                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul ?? 'Gambar Berita' }}">
                                <!-- Video (Jika Ada) - Anda perlu menyesuaikan ini jika berita memiliki video -->
                                <!--<a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">-->
                                <!--    <i class="fas fa-play"></i>-->
                                <!--</a>-->
                            </div>
                            <!-- Judul dan Konten Berita -->
                            <div class="course-details">
                                <h3 class="mb-20">{{ $berita->judul ?? 'Judul Berita' }}</h3>
                                <p class="mb-20">
                                    {{ $berita->keterangan ?? 'Tidak ada keterangan' }}
                                </p>
                                <!-- Anda bisa menambahkan gambar tambahan jika diperlukan -->
                                <!--<div class="row">-->
                                <!--    <div class="col-md-6 mb-20">-->
                                <!--        <img src="assets/img/course/01.jpg" alt="">-->
                                <!--    </div>-->
                                <!--    <div class="col-md-6 mb-20">-->
                                <!--        <img src="assets/img/course/02.jpg" alt="">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!-- Bagian "Course Requirement" dan "Professional Experience" -->
                                <!--<div class="my-4">-->
                                <!--    <h3 class="mb-3">Course Requirement</h3>-->
                                <!--    <p>...</p>-->
                                <!--    <ul class="course-single-list">-->
                                <!--        <li>...</li>-->
                                <!--    </ul>-->
                                <!--</div>-->
                                <!--<div class="my-4">-->
                                <!--    <h3 class="mb-3">Professional Experience</h3>-->
                                <!--    <p>...</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <!-- End Konten Utama -->
                </div>
            </div>
        </div>
    </div>
    <!-- course-single end-->

</main>

<!-- footer area -->
<footer class="footer-area" style="background-color: #321979;">
    <div class="footer-shape">
        <img src="assets/img/shape/03.png" alt="">
    </div>
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <h4 class="footer-widget-title">Contac Us</h4>
                        <p class="mb-3">
                            Institut Teknologi Del<br>
                            Jl. Sisingamangaraja, Sitoluama<br>
                            Laguboti, Toba Samosir<br>
                            Sumatera Utara, Indonesia<br>
                            Kode Pos : 22381<br>
                            Telp : +62 632 331234
                          </p>
                        <ul class="footer-contact">
                            <li><a href="https://www.facebook.com/share/p/1P52uJ8Wni/" target="_blank"><i class="fab fa-facebook-f"></i>Institut Teknologi Del </a></li>
                            <li><i class="far fa-map-marker-alt"></i>Sitoluama,Laguboti,Toba</li>
                            <li><a href="mailto:info@example.com"><i class="far fa-envelope"></i>info@del.ac.id</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Site Navigation</h4>
                        <ul class="footer-list">
                            <li><a href="about.html"><i class="fas fa-caret-right"></i> Home</a></li>
                            <li><a href="faq.html"><i class="fas fa-caret-right"></i> Profil Prodi</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Kurikulum</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Berita</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Pengumuman</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Lectures</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title"></h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-caret-right"></i> Dokementasi</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> HubConnect</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Prestasi</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Prospek karir</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Alumni</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Fasilitas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> D3 TI © 2025 Institut Teknologi Del. </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/share/1HUGES27rt/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/d3tidel_2024?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://youtube.com/@d3teknologiinformasiitdel350?si=NQroF3kKSlHKiSQB"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->




<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
<!-- scroll-top end -->


<!-- js -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>