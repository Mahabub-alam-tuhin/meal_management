<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr" data-theme="theme-default" data-assets-path="/adminAsset/" data-template="vertical-menu-template-dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>admin</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/adminAsset/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="/adminAsset/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/adminAsset/vendor/css/rtl/core-dark.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/adminAsset/vendor/css/rtl/theme-default-dark.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/adminAsset/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/adminAsset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/adminAsset/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="/adminAsset/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/adminAsset/vendor/libs/select2/select2.css" />
    <script src="/adminAsset/vendor/js/helpers.js"></script>
    <script src="/adminAsset/vendor/js/template-customizer.js"></script>
    <script src="/adminAsset/js/config.js"></script>


    {{-- push link  --}}
    <script src=(node_modules/push.js/bin/push.min.js,public/adminAsset/js/push.min.js)></script>
    <script src="/adminAsset/js/push.min.js"></script>

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/dashboard" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                    fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                    fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">Admin</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                @include('admin.include.left-sidebar')
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('admin.include.top-nav')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container py-3">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    {{-- <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by <a href="https://pixinvent.com/" target="_blank"
                                        class="fw-semibold">Pixinvent</a>
                                </div>
                                <div>
                                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                        target="_blank">License</a>
                                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                        class="footer-link me-4">More Themes</a>

                                    <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/"
                                        target="_blank" class="footer-link me-4">Documentation</a>

                                    <a href="https://pixinvent.ticksy.com/" target="_blank"
                                        class="footer-link d-none d-sm-inline-block">Support</a>
                                </div>
                            </div>
                        </div>
                    </footer> --}}
                    <!-- / Footer -->

                    <script>
                        (function($){

                        }(jQuery));
                        push.create('booked!',{
                        Body:'welcome'  
                        timeout:5000
                        });
                    </script>

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/adminAsset/vendor/libs/jquery/jquery.js"></script>
    <script src="/adminAsset/vendor/libs/popper/popper.js"></script>
    <script src="/adminAsset/vendor/js/bootstrap.js"></script>
    <script src="/adminAsset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    {{-- <script src="/adminAsset/vendor/libs/node-waves/node-waves.js"></script> --}}

    {{-- <script src="/adminAsset/vendor/libs/hammer/hammer.js"></script> --}}
    {{-- <script src="/adminAsset/vendor/libs/i18n/i18n.js"></script> --}}
    <script src="/adminAsset/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="/adminAsset/vendor/js/menu.js"></script>
    <!-- endbuild -->


    <!-- Main JS -->
    <script src="/adminAsset/js/main.js"></script>

    <!-- Page JS -->



    @yield('scripts')
    @stack('cjs')
</body>

</html>


<!-- beautify ignore:end -->
