<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user')}}/img/favicon.png" rel="icon">
  <link href="{{ asset('user')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('user')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('user')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ asset('user')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('user')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('user')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('user')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('user')}}/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user')}}/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('user')}}/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="@yield('home')"><a href="{{ url('/') }}">Home</a></li>
          <li class="@yield('literatur')"><a href="{{ url('literatur') }}">Literatur</a></li>
          {{-- <li class="@yield('galeri')"><a href="{{ url('galeri') }}">Galeri</a></li> --}}
          <li class="@yield('kelembagaan')"><a href="{{ url('kelembagaan') }}">Kelembagaan</a></li>
        </ul>
      </nav><!-- .nav-menu -->

        @if (Auth::check())
            <a href="{{ Auth::user()->role=='admin'? route('home') : route('account') }}" class="get-started-btn">My account</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger ml-2">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="get-started-btn">Login</a>
            <a href="{{ route('register') }}" class="get-started-btn">Register</a>
        @endif

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('user')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('user')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('user')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('user')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('user')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{ asset('user')}}/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('user')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('user')}}/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user')}}/js/main.js"></script>

</body>

</html>
