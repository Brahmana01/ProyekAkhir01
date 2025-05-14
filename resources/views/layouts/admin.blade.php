<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Web D3-TI</title>

    <!-- Global stylesheets -->
    <link href="{{asset('assets2/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('assets2/demo/demo_configurator.js')}}"></script>
    <script src="{{asset('assets2/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('assets2/js/vendor/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>

    <script src="{{asset('assets2/js/app.js')}}"></script>
    <script src="{{asset('assets2/demo/pages/dashboard.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/streamgraph.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/sparklines.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/lines.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/areas.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/donuts.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/bars.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/progress.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/heatmaps.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/pies.js')}}"></script>
    <script src="{{asset('assets2/demo/charts/pages/dashboard/bullets.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
        <div class="container-fluid">
            <div class="d-flex d-lg-none me-2">
                <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                    <i class="ph-list"></i>
                </button>
            </div>

            <div class="navbar-brand flex-1 flex-lg-0">
                <a href="index.html" class="d-inline-flex align-items-center">
                    <img src="../../../assets/images/logo_icon.svg" alt="">
                    <img src="../../../assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3" alt="">
                </a>
            </div>

            <ul class="nav flex-row">
                <li class="nav-item d-lg-none">
                    <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                        <i class="ph-magnifying-glass"></i>
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
                        <i class="ph-squares-four"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0">
                        <!-- Isi dropdown apps -->
                    </div>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ph-chats"></i>
                        <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                    </a>

                    <div class="dropdown-menu wmin-lg-400 p-0">
                        <!-- Isi dropdown chats -->
                    </div>
                </li>
            </ul>

            <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
                <!-- Navbar search -->
            </div>

            <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                <li class="nav-item ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                        <i class="ph-bell"></i>
                        <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                    </a>
                </li>

                <li class="nav-item ms-lg-2">
                    <!-- Tombol Logout -->
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-flat-light btn-icon rounded-pill">
                            <i class="ph-sign-out me-2"></i>
                            <span class="d-none d-lg-inline-block">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->


                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="ph-house"></i>
                                <span>
                                    Dashboard
                                    <span class="d-block fw-normal opacity-50">No pending orders</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.videos.index') }}" class="nav-link">
                                <i class="ph-play-circle"></i>
                                <span>Videos</span>
                            </a>
                        </li>

                        <!-- **TAMBAHAN SIDEBAR LECTURERS** -->
                        <li class="nav-item">
                            <a href="{{ route('admin.lecturers.index') }}" class="nav-link">
                                <i class="ph-users"></i>  <!-- Ganti dengan icon yang sesuai -->
                                <span>Lecturers</span>
                            </a>
                        </li>
                        <!-- **AKHIR TAMBAHAN SIDEBAR LECTURERS** -->

                        <!-- Tambahkan menu sidebar lainnya di sini -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">
                            <h4 class="page-title mb-0">
                                Home - <span class="fw-normal">Dashboard</span>
                            </h4>

                            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                            <!-- Header content -->
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="#" class="breadcrumb-item">Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>
                            </div>

                            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                            <!-- Breadcrumb elements -->
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    @yield('content')  <!-- Konten dinamis akan dimasukkan di sini -->

                </div>
                <!-- /content area -->


                <!-- Footer -->
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>© 2022 <a href="#">Admin D3-TI</a></span>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-lifebuoy"></i>
                                        <span class="d-none d-md-inline-block ms-2">Support</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-file-text"></i>
                                        <span class="d-none d-md-inline-block ms-2">Docs</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-shopping-cart"></i>
                                        <span class="d-none d-md-inline-block ms-2">Purchase</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Notifications -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
        <!-- Isi offcanvas notifikasi -->
    </div>
    <!-- /notifications -->


    <!-- Demo config -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
        <!-- Isi offcanvas konfigurasi demo -->
    </div>
    <!-- /demo config -->

</body>
</html>