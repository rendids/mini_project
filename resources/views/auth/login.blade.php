<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title -->
    <title></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template">
    <meta property="og:title" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template">
    <meta property="og:description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template">
    <meta property="og:image" content="https://fooddesk.dexignlab.com/xhtml/page-error-404.html">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    @include('layouts.alert')
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .login-bx .food-img {
            max-width: 100%;
        }
    </style>
</head>

<body class="body">
    <div class="container mt-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-md-6 sign text-center">
                <div>
                    <img src="{{ asset('assets/images/auth.png') }}" class="food-img" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-4 pe-0">
                <div class="sign-in-your">
                    <div class="text-center mb-3">
                        <img src="{{ asset('assets/images/Group.svg') }}" class="mb-3" alt="">
                        <h4 class="fs-19 font-size"></h4>
                        <span class="dlab-sign-up">Login</span>
                    </div>
                    <form action="{{ route('login.proses') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-1"><strong>Email</strong></label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="Masukkan Alamat Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Masukkan Kata Sandi">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <a href="{{ route('kebijakan_privasi') }}" class="text-secondary">Kebijakan privasi</a>
                            </div>
                            <script>
                                const checkbox = document.getElementById('customCheck1');
                                const form = document.querySelector('form');

                                form.addEventListener('submit', function(event) {
                                    if (!checkbox.checked) {
                                        event.preventDefault(); // Menghentikan pengiriman formulir
                                        swal.fire('Peringatan', 'Anda harus menyetujui kebijakan privasi untuk melanjutkan.', 'warning');
                                    }
                                });
                            </script>
                            <a href="{{ route('password.request') }}">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block shadow text-white"
                                style="background-color: #145AAC">Login</button>
                        </div>
                    </form>
                    <div class="text-center my-4">
                        <h6 class="dlab-sign-up style-2">Register</h6>
                    </div>
                    <div style="display: flex;">
                        <div class="card" style="width: 18rem; margin-right: 20px;">
                            <a href="{{ route('register.penyedia') }}">
                                <!-- Menggunakan route untuk halaman registrasi layanan jasa -->
                                <div class="card-body" style="text-align: center;">
                                    <img src="{{ asset('assets/images/penyedia.png') }}" class="card-img-top"
                                        alt="...">
                                    <h5 class="card-title" style="font-size: 19px;"><b>Layanan Jasa</b></h5>
                                </div>
                            </a>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('register.user') }}">
                                <!-- Menggunakan URL langsung untuk halaman registrasi pengguna -->
                                <div class="card-body" style="text-align: center;">
                                    <img src="{{ asset('assets/images/Add User-pana.png') }}" class="card-img-top"
                                        alt="...">
                                    <h5 class="card-title" style="font-size: 19px;"><b>Pengguna</b></h5>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Required vendors -->
            <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
</body>

</html>
