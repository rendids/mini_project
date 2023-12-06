<!DOCTYPE html>
<html lang="en" class="h-100">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Title -->
    <title>Register</title>
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
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="cassets/images/favicon.png">
    <link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="body">
    <div class="container mt-0">
        <div class="row align-items-center justify-contain-center">
            <div class="col-xl-12 mt-5">
                <div class="card border-0">
                    <div class="card-body login-bx">
                        <div class="row mt-5">
                            <div class="col-xl-7 col-md-6 sign text-center">
                                <div>
                                    <img src="{{ asset('assets/images/auth.png') }}" class="food-img" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 pe-0">
                                <div class="sign-in-your active-page" id="page1">
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('assets/images/Group.svg') }}" class="mb-3" alt="">
                                        <h4 class="fs-18 font-size">Buat akun sebagai penyedia jasa di assistify</h4>
                                        <span class="dlab-sign-up">Register</span>
                                    </div>
                                    {{-- <div class="error text-light bg-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div> --}}
                                    <form action="{{ route('registersave.penyedia') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-step" data-step="1">
                                            <div class="mb-3">
                                                <label class="mb-1"><strong>Username</strong></label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="masukkan Username">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email" class="form-control" name="email"
                                                value="{{ old('email')}}" placeholder="masukkan email">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="mb-1"><strong>Password</strong></label>
                                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="masukkan password">
                                                        @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="mb-1"><strong>Konfirmasi Password</strong></label>
                                                    <input type="password" class="form-control" name="konfirmasi-password" value="{{ old('konfirmasi-password') }}" placeholder="asukkan konfirm passsword">
                                                        @error('konfirmasi-password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="button" class="btn btn-sm shadow text-white"
                                                    style="background-color: #145AAC" onclick="nextStep(1, 2)">
                                                    <span style="font-size: 14px;">Selanjutnya</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-step" data-step="2" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="mb-1"><strong>jenis layanan</strong></label>
                                                    <input type="text" name="layanan" id="" class="form-control" value="{{ old('layanan')}}"  placeholder="masukan jenis layanan">
                                                    @error('layanan')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="mb-1"><strong>No Telp</strong></label>
                                                    <input type="number" class="form-control" name="telp" value="{{ old('telp')}}" placeholder="masukan nomer telepon">
                                                    @error('telp')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-1"><strong>Alamat</strong></label>
                                                <textarea type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="masukkan alamat"></textarea>
                                                @error('alamat')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="text-end">
                                                <button type="button" class="btn btn-sm shadow text-white"
                                                    style="background-color: #145AAC" onclick="nextStep(2, 1)">
                                                    <span style="font-size: 14px;">sebelumnya</span>
                                                </button>
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-block shadow text-white"
                                                    style="background-color: #145AAC">Register</button>
                                            </div>
                                        </div>
                                        <p class="mt-5 text-center">
                                            Sudah punya akun? <a href="{{ route('login') }}"
                                                class="text-underline">Masuk</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function nextStep(currentStep, nextStep) {
            document.querySelector(`.form-step[data-step="${currentStep}"]`).style.display = 'none';
            document.querySelector(`.form-step[data-step="${nextStep}"]`).style.display = 'block';
        }
    </script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script> --}}
</body>

</html>
