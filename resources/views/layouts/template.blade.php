<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - WBS SPI UNSIKA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/assets/img/unsikalogo.png')}}" rel="icon">
  <link href="{{asset('/tema/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/tema/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/tema/assets/css/style.css')}}" rel="stylesheet">

  @yield('extracss')

</head>

<body>

  @yield('header')

  @yield('hero')

  <main id="main" style="margin:0 !important">
    @yield('main')
  </main>

  @yield('footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/tema/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/tema/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/tema/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/tema/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/tema/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/tema/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('/tema/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/tema/assets/js/main.js')}}"></script>

  @yield('extrajs')

</body>

</html>
