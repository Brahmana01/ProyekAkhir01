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

    <style>
        /* Gaya default (untuk semua layar, termasuk mobile) */

        /* Gaya logo default (ukuran lebih kecil untuk mobile) */
        .navbar-brand img {
            width: 120px; /* Ukuran default untuk mobile */
        }

        /* Sembunyikan elemen di mobile */
        .hide-on-mobile {
            display: none;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #f8f9fa; /* Light grey background */
            padding: 20px;
            border-right: 1px solid #dee2e6; /* Light border */
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            display: block;
            padding: 8px 12px;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #e9ecef; /* Lighter grey on hover */
        }


        /* Media query untuk layar yang lebih besar dari mobile (tablet ke atas) */
        @media (min-width: 768px) {
            /* Di dalam sini, Anda menimpa gaya untuk layar yang lebih besar */

            /* Tampilkan elemen yang disembunyikan di mobile */
            .hide-on-mobile {
                display: block; /* Tampilkan di tablet dan desktop */
            }

            /* Mengubah tata letak header */
            .header-top-wrap {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            /* Ukuran logo pada layar yang lebih besar */
            .navbar-brand img {
                width: 200px; /* Ukuran logo yang lebih besar */
            }

            /* Contoh tambahan: Mengubah ukuran font header pada layar yang lebih besar */
            .header-top-contact ul li a {
                font-size: 14px; /* Ukuran font yang lebih besar untuk layar yang lebih besar */
            }
        }
    </style>

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
                                    <a href="{{ url('/') }}">
                                        <i class="far fa-user"></i>
                                        Home
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>

    <!-- Main Content Area -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lecturers.index') }}">
                                    Lecturers
                                </a>
                            </li>
                            <!-- Tambahkan menu navigasi lainnya di sini -->
                        </ul>
                    </div>
                </nav>

                <!-- Content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="login-area py-120">
                        <div class="container">
                            <div class="col-md-5 mx-auto">
                                <div class="login-form">
                                    <div class="login-header">
                                        <img src="{{ asset('assets/img/logo/02.ico') }}" alt="Logo">
                                        <p>Login dengan akun admin Anda!</p>
                                    </div>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form method="POST" action="{{ route('admin.postLogin') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Your Password" required>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember" id="remember" name="remember">
                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button type="submit" class="theme-btn"><i class="far fa-sign-in"></i> Login</button>
                                        </div>


                                    </form>
                                    {{--
                                    <div class="login-footer">
                                        <p>Don't have an account? <a href="register.html">Register.</a></p>
                                    </div>
                                    --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </main>
            </div>
        </div>
    </main>


    @include('layouts.footer')