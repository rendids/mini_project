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
            <div class="row  mt-5">
              <div class="col-xl-7 col-md-6 sign text-center">
                <div>
                  <img src="{{ asset('') }}" class="food-img" alt="">
                </div>
              </div>
              <div class="col-xl-4 col-md-4 pe-0">
                <div class="sign-in-your">
                  <div class="text-center mb-3">
                    <img src="{{ asset('assets/images/Group.svg') }}" class="mb-3" alt="">
                    <h4 class="fs-19 font-size">Buat akun anda di assistify</h4>
                    <span class="dlab-sign-up">Register</span>
                  </div>
                  <form action="{{ route('registersave.user') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="mb-1"><strong>Username</strong></label>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                      <label class="mb-1"><strong>Email</strong></label>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="mb-1"><strong>Konfirmasi Password</strong></label>
                        <input type="password" class="form-control" name="konfirmasi-password"
                          placeholder="Konfirmasi password">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-block shadow text-white"
                        style="background-color: #145AAC">Register</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Required vendors -->
  <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
  {{-- <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script> --}}
</body>

</html>
