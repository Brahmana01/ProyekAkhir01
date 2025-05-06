<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $pengumuman->judul_pengumuman ?? '' }}">
    <meta name="keywords" content="pengumuman, detail, teknologi informasi">

    <!-- title -->
    <title>{{ $pengumuman->judul_pengumuman ?? 'Detail Pengumuman' }} - Website D3 Teknologi Informasi</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://th.bing.com/th/id/OIP.jFB7oMhq7TERFdcJ9ALdtwAAAA?rs=1&pid=ImgDetMain">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Header -->
    <header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="https://www.facebook.com/share/1HUGES27rt/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/d3tidel_2024?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://youtube.com/@d3teknologiinformasiitdel350?si=NQroF3kKSlHKiSQB"><i
                                    class="fab fa-youtube"></i></a>
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
                                    <a href="mailto:info@example.com"><i class="far fa-envelopes"></i>
                                        diploma3tiDel@gmail.com</a>
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
                        <img src="http://www.del.ac.id/wp-content/uploads/2015/06/logox.png" alt="D3 Teknologi Informasi">
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

                            <li class="nav-item"><a class="nav-link" href="{{ route('beritas.indexPublic') }}">Berita</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a></li>

                            <li class="nav-item"><a class="nav-link" href="teacher">Lecturers</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dokumentasi</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{ route('galleries.index') }}">Galeri</a></li>
                                    <li><a class="dropdown-item" href="{{ route('videos.showPublic') }}">Video</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">HubConnect</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="contact">Kontak</a></li>
                                    <li><a class="dropdown-item" href="sosmed">Sosial Media</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('prestasies.indexPublic') }}">Prestasi</a>
                            </li>

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
                <h2 class="breadcrumb-title">Detail Pengumuman</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('beritas.indexPublic') }}">Pengumuman</a></li>
                    <li class="active">{{ $pengumuman->judul_pengumuman ?? 'Detail' }}</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- blog single area -->
        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    @if ($pengumuman->gambar)
                                        <img src="{{ asset('storage/pengumuman/' . $pengumuman->gambar) }}"
                                            alt="{{ $pengumuman->judul_pengumuman }}">
                                    @else
                                        <img src="{{ asset('assets/img/default-image.jpg') }}" alt="Default Image">
                                    @endif
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-calendar-alt"></i><a
                                                        href="#">{{ $pengumuman->tanggal_update_pengumuman ?? 'Tanggal Tidak Tersedia' }}</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                            <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">
                                            {{ $pengumuman->judul_pengumuman ?? 'Judul Tidak Tersedia' }}</h3>
                                        <p class="mb-10">
                                            {{ $pengumuman->keterangan_lengkap_pengumuman ?? 'Tidak ada keterangan' }}
                                        </p>
                                        
                                    </div>

                                    <!-- Author Section (Optional) -->
                                    <!--
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="{{ asset('assets/img/blog/author.jpg') }}" alt="Author">
                                        </div>
                                        <div class="author-info">
                                            <h6>Author</h6>
                                            <h3 class="author-name">Nama Penulis</h3>
                                            <p>Deskripsi penulis...</p>
                                            <div class="author-social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    -->

                                    <!-- Comments Section (Optional) -->
                                    <!--
                                    <div class="blog-comments">
                                        <h3>Comments</h3>
                                        <div class="blog-comments-wrapper">
                                            
                                        </div>
                                        <div class="blog-comments-form">
                                            <h3>Leave a Comment</h3>
                                            
                                        </div>
                                    </div>
                                    -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">

                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog single area end -->

    </main>

   <!-- footer -->
   <footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-4">
                    <div class="footer-widget-box">
                        <a href="#" class="footer-logo">
                            <img src="http://www.del.ac.id/wp-content/uploads/2015/06/logox.png" alt="logo">
                        </a>
                        <p class="mb-3">
                            Impressing the world through ideas, creativity, and service in the field of information technology that is beneficial to society.
                        </p>
                        <div class="footer-contact">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i>Sitoluama, Laguboti, Toba</li>
                                <li><i class="far fa-phone"></i>0632-331234</li>
                                <li><i class="far fa-envelope"></i><a
                                        href="mailto:info@example.com">diploma3tiDel@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-caret-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>FAQ</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Terms Of Service</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Privacy policy</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Our Teams</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe Our Newsletter To Get More Update & News</p>
                            <div class="subscribe-form">
                                <input type="email" class="form-control" placeholder="Your Email">
                                <button class="theme-btn" type="submit">Subscribe Now <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="footer-social">
                            <span class="title">Follow Us:</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copyright-text">
                            © 2024 <a href="#">D3 Teknologi Informasi</a> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   <!-- scroll top area -->
   <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>

   <!-- js -->
   <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
   <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
   <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>