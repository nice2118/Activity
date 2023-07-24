<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('images/Logo1.png') }}" rel="shortcut icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @yield('styles')
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            {{-- <div class="container"> --}}
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('images/GKE2.png') }}" alt="Logo GKE" class="brand-image-xl" style="opacity: .8">
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="#" class="dropdown-item">Some action </a></li>
                            <li><a href="#" class="dropdown-item">Some other action</a></li>

                            <li class="dropdown-divider"></li>

                            <!-- Level two dropdown-->
                            <li class="dropdown-submenu dropdown-hover">
                                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    class="dropdown-item dropdown-toggle">Hover for action</a>
                                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                    </li>

                                    <!-- Level three dropdown-->
                                    <li class="dropdown-submenu">
                                        <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="dropdown-item dropdown-toggle">level 2</a>
                                        <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Level three -->

                                    <li><a href="#" class="dropdown-item">level 2</a></li>
                                    <li><a href="#" class="dropdown-item">level 2</a></li>
                                </ul>
                            </li>
                            <!-- End Level two -->
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-0 py-0 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-block btn-outline-secondary btn-xs">Admin</a>
                        @else
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('login') }}" class="btn btn-block btn-outline-secondary btn-xs">Log
                                        in</a>
                                </div>
                                <div class="col-md-6">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="btn btn-block btn-outline-secondary btn-xs">Register</a>
                                    @endif
                                </div>
                            </div>
                        @endauth
                    </div>
                @endif
            </ul>
            {{-- </div> --}}
        </nav>
        <!-- /.navbar -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="owl-carousel header-carousel position-relative">
                <?php
                // $folderPath = 'Default/PageHeader/';
                // $files = scandir($folderPath);
                // $imageFiles = array_diff($files, array('.', '..'));
                // $numImages = count($imageFiles);
                // foreach ($imageFiles as $imageFile) {
                ?>
                <div class="owl-carousel-item position-relative"
                    data-dot="<img src='{{ asset('images/Default/PageHeader/carousel-1.jpg') }}'>">
                    <img class="img-fluid" src="{{ asset('images/Default/PageHeader/carousel-1.jpg') }}"
                        alt="" style="height:400px;">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-12 col-lg-10">
                                    <h1 class="display-5 text-white animated slideInDown">LEADING INTEGRATED ENERGY
                                        PLAYER
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-3">บริษัท กันกุลเอ็นจิเนียริ่ง จำกัด
                                        (มหาชน)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative"
                    data-dot="<img src='{{ asset('images/Default/PageHeader/carousel-2.jpg') }}'>">
                    <img class="img-fluid" src="{{ asset('images/Default/PageHeader/carousel-2.jpg') }}"
                        alt="" style="height:400px;">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-12 col-lg-10">
                                    <h1 class="display-5 text-white animated slideInDown">LEADING INTEGRATED ENERGY
                                        PLAYER
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-3">บริษัท กันกุลเอ็นจิเนียริ่ง จำกัด
                                        (มหาชน)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative"
                    data-dot="<img src='{{ asset('images/Default/PageHeader/carousel-3.jpg') }}'>">
                    <img class="img-fluid" src="{{ asset('images/Default/PageHeader/carousel-3.jpg') }}"
                        alt="" style="height:400px;">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-12 col-lg-10">
                                    <h1 class="display-5 text-white animated slideInDown">LEADING INTEGRATED ENERGY
                                        PLAYER
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-3">บริษัท กันกุลเอ็นจิเนียริ่ง จำกัด
                                        (มหาชน)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // }
                ?>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            <a id="back-to-top" href="#" class="btn btn-primary2 back-to-top" role="button"
                aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark2 text-body footer mt-3 pt-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-3">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-24">
                        <h5 class="text-white mb-4">Gunkul Engineering Public Company Limited</h5>
                        <p class="mb-2 text-white2"><i class="fa fa-map-marker-alt me-3 text-white2"></i>1177, 8th
                            Floor , Pearl
                            Bangkok
                            Building,
                            Phahonyothin Road, Phayathai, Phayathai, Bangkok 10400</p>
                        <p class="mb-2 text-white2"><i class="fa fa-phone-alt me-3 text-white2"></i>0-2242-5800 (Auto)
                        </p>
                        <p class="mb-2 text-white2"><i class="fa fa-envelope me-3 text-white2"></i>gunkul@gunkul.co.th
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light btn-social"
                                href="https://www.facebook.com/GUNKUL.G" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="text-white col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <p> &copy; <a href="#">2019 Gunkul Engineering Public Company Limited</a>, All Right
                                Reserved.</p>
                        </div>
                        <div class="col-md-6 text-center text-md-end"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- REQUIRED SCRIPTS -->

        @vite('resources/js/app.js')
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
        <script src="{{ asset('js/wow.min.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>

        @yield('scripts')
</body>

</html>
