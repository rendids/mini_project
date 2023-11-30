<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fooddesk.dexignlab.com/codeigniter/demo/alert by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 03:47:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Title -->
    <title>Layanan Jasa</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="DexignLab" />
    <meta name="robots" content="" />
    <meta name="description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template" />
    <meta property="og:title" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template" />
    <meta property="og:description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template" />
    <meta property="og:image" content="https://fooddesk.dexignlab.com/xhtml/page-error-404.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.svg') }}">


    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    @include('layouts.alert')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        <div class="content-body">
            <div class="container">

                @yield('content')

            </div>
        </div>
        <div class="footer">
            <div class="copyright border-top">
                <p>Copyright © Designed by <a href="https://themeforest.net/user/dexignlabs"
                        target="_blank">DexignLab</a> 2023</p>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-2.js') }}"></script>

    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script> --}}


    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from fooddesk.dexignlab.com/codeigniter/demo/alert by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 03:47:20 GMT -->

</html>
