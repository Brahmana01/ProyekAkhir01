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

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-book">
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
        </div>
    </div>
    <!-- preloader end -->



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
                    <a class="navbar-brand" href="index.html">
                        <img src="http://www.del.ac.id/wp-content/uploads/2015/06/logox.png"  alt="D3 Teknologi Informasi">    
                    </a>
                    
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="index.html">Home</a>
                            </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil Prodi</a>
                                    <div class="mega-content">
                                    <div class="container-fluid">
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="academic-single.html">Sejarah</a></li>
                                        <li><a class="dropdown-item" href="about.html">Tentang D3 TI</a></li>
                                        <li><a class="dropdown-item" href="faculty-single.html">Visi Misi</a></li>
                                        <li><a class="dropdown-item" href="faculty.html">Struktur organisasi</a></li>
                                        <li><a class="dropdown-item" href="academic-single.html">Tujuan</a></li>
                                        <li><a class="dropdown-item" href="academic-single.html">Strategi Pembelajaran</a></li>
                                    </ul>
                                </li>

                            
                            <li class="nav-item"><a class="nav-link" href="kurikulum.html">Kurikulum</a></li>
      
                            <li class="nav-item"><a class="nav-link" href="course.html">Berita</a></li>
  
                            <li class="nav-item"><a class="nav-link" href="blog.html">Pengumuman</a></li>      
                            
                            <li class="nav-item"><a class="nav-link" href="teacher.html">Lecturers</a></li>     

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dokumentasi</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('galleries.index')}}">Galeri</a></li>
                                    <li><a class="dropdown-item" href="how-to-apply.html">Video</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">HubConnect</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="contact.html">Kontak</a></li>
                                    <li><a class="dropdown-item" href="contact.html">Sosial Media</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item"><a class="nav-link" href="research.html">Prestasi</a></li>

                            <li class="nav-item"><a class="nav-link" href="course-2.html">Prospek_Karir</a></li>

                            <li class="nav-item"><a class="nav-link" href="alumni.html">Alumni</a></li>


                            <li class="nav-item"><a class="nav-link" href="facility.html">Fasilitas</a></li> 


                            <li class="nav-item"><a class="nav-link" href="facility.html">Beasiswa</a></li> 


                            <li class="nav-item"><a class="nav-link" href="facility.html">Kerjasama</a></li> 
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>