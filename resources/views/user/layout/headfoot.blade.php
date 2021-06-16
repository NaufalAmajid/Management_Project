<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kaffe Ndeso</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('userinterface/assets/img/logokd.png') }}" rel="icon">
    <link href="{{ asset('userinterface/assets/img/logokd.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('userinterface/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userinterface/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userinterface/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userinterface/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userinterface/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('userinterface/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('userinterface/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container text-right">
            <i class="icofont-phone"></i> @yield('kontak')
            <i class="icofont-clock-time icofont-rotate-180"></i> @yield('jadwal')</div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><span style="font-family: Impact; color:aliceblue;">Kaffe
                            Ndeso</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="@yield('aktifhome')"><a href="{{ url('index') }}">Home</a></li>
                    <li class="nav-item dropright fixed @yield('aktifmenu')">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('makanuser') }}" style="color: rgb(255, 123, 0)"
                                ;>Makanan</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('minumuser') }}" style="color: rgb(255, 123, 0)"
                                ;>Minuman</a>
                        </div>
                    </li>
                    <li class="@yield('event')"><a href="{{ url('userfasilitas') }}">Fasilitas</a></li>
                    <li class="@yield('about')"><a href="{{ url('about') }}">Tentang Kami</a></li>
                    <!-- <li><a href="#">Login</a></li> -->
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    @yield('content')
    @include('sweetalert::alert')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h2><span>Kaffe</span> Ndeso</h2>
            <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>NaufalAmajid</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
                Designed by <a href="#">Visual Studio Code</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('userinterface/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('userinterface/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('userinterface/assets/js/main.js') }}"></script>

</body>

</html>
