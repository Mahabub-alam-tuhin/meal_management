<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://md-shefat-masum.github.io/index/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://md-shefat-masum.github.io/index/images/logo.png" type="image/x-icon">
    <title>Admin Panel</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/fontawesome.css">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/icofont.css">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/themify.css">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/flag-icon.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/bootstrap.css">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="/backend/assets/responsive.css">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/backend/app.js']) --}}
</head>

<body main-theme-layout="main-theme-layout-4">

    <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <h4>Have a great day at work today <span>&#x263A;</span></h4>
        </div>
    </div>

    <!--page-wrapper Start-->
    <div class="page-wrapper" id="app" data-v-app="">
        <div>
            @include('frontEnd.user_booking include.header')
            <div class="page-body-wrapper" style="background-color: #303841;">
              
                    {{-- sidebar --}}
                    @include('frontEnd.user_booking include.left-sidebar')
            <div class="page-body">
                    @yield('content')
            </div>
            </div>
        </div>
    </div>
    <!--page-wrapper Ends-->

    <!-- latest jquery-->
    <script src="/backend/assets/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/backend/assets/bootstrap.bundle.min.js"></script>
    <!-- Sidebar jquery-->
    <script src="/backend/assets/sidebar-menu.js"></script>
    <!-- Theme js-->
    <script src="/backend/assets/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('custom-js')

</body>

</html>
