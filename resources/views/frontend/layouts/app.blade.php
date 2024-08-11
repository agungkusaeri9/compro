<!-- /*
* Template Name: Sterial
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/tiny-slider.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/glightbox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/style.css">
    <title>Home</title>
    @stack('styles')
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav mt-3">
        <div class="container">

            <div class="site-navigation">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('home') }}" class="logo m-0 float-start text-dark">Compro</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                        <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                            {{-- <li class="active"><a href="{{ route('home') }}">Home</a></li> --}}
                            <li><a class="text-dark" href="{{ route('tentang') }}">TENTANG PERUSAHAAN</a></li>
                            <li><a class="text-dark" href="{{ route('portofolio.index') }}">PORTOFOLIO</a></li>
                            <li><a class="text-dark" href="{{ route('profile-perusaahaan') }}">PROFILE PERUSAHAAN</a>
                            </li>
                            <li><a class="text-dark" href="{{ route('kontak') }}">KONTAK</a></li>

                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 text-lg-end">
                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    @yield('content')

    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>CV. YADIN KARYA</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit nulla
                            labore ipsum ea omnis doloremque corrupti, odit aliquam ut.
                        </p>
                    </div>
                </div> <!-- /.col-lg-3 -->
                <div class="col-lg"></div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-whatsapp"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->
        </div> <!-- /.site-footer -->

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>


        <script src="{{ asset('assets/frontend') }}/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/tiny-slider.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/aos.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/navbar.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/counter.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/rellax.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/flatpickr.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/glightbox.min.js"></script>
        <script src="{{ asset('assets/frontend') }}/js/custom.js"></script>
        @stack('scripts')
</body>

</html>
