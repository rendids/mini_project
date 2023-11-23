<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from fooddesk.dexignlab.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 03:45:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
     <!-- Title -->
	 <title>Login</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignLab" />
	<meta name="robots" content="" />
	<meta name="description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template"/>
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
										<h4 class="fs-20 font-w800 text-black">Create an Account</h4>
										<span class="dlab-sign-up">Sign Up</span>
									</div>
									<form action="{{ route('login.proses') }}" method="POST">
                                        @csrf
										<div class="mb-3">
											<label class="mb-1"><strong>Email Address</strong></label>
											<input type="email" class="form-control" name="email" placeholder="hello@example.com">
										</div>
										<div class="mb-3">
											<label class="mb-1"><strong>Password</strong></label>
											<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
										<div class="row d-flex justify-content-between mt-4 mb-2">
											<div class="mb-3">
											   <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
											</div>
											<div class="mb-3">
												<a href="page-forgot-password.html">Forgot Password?</a>
											</div>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-block shadow text-white" style="background-color: #145AAC">Sign Me In</button>
										</div>
									</form>
									<div class="text-center my-4">
										<h6 class="dlab-sign-up style-1">Register</h6>
									</div>
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('assets/images/penyedia.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                      </div>
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('assets/images/penyedia.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                      </div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="public/assets/vendor/global/global.min.js"></script>
<script src="public/assets/vendor/swiper/js/swiper-bundle.min.js"></script>
<script src="public/assets/js/dlabnav-init.js"></script>
<script src="public/assets/js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from fooddesk.dexignlab.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 03:46:00 GMT -->
</html>
