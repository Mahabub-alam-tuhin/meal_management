<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meal Management || @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontEndAsset') }}/img/favicon.png" rel="icon">
  <link href="{{asset('frontEndAsset') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontEndAsset') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontEndAsset') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontEndAsset') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('frontEndAsset') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('frontEndAsset') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontEndAsset') }}/css/main.css" rel="stylesheet">
  {{-- <link href="{{asset('frontEndAsset') }}/css/demo.css" rel="stylesheet"> --}}

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontEnd.include.header')
 <!-- End Header -->
 @yield('content')
  <!-- ======= Hero Section ======= -->
 <!-- End Hero Section -->
  <!-- Vendor JS Files -->
  <script src="{{asset('frontEndAsset') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontEndAsset') }}/vendor/aos/aos.js"></script>
  <script src="{{asset('frontEndAsset') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('frontEndAsset') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('frontEndAsset') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontEndAsset') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontEndAsset') }}/js/main.js"></script>

</body>

</html>