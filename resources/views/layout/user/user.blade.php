<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from www.getmasum.com/html-preview/fancyshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 10:05:33 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FancyShop - Ecommerce Bootstrap Template</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/animate.css')}}" />
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/owl.theme.default.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/meanmenu.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/venobox.css')}}" />
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{ asset('assetsAdmin/style.css') }}">
	<link rel="stylesheet" href="{{asset('assetsAdmin/css/responsive.css')}}" />
</head>
	<body>

		<!--  Preloader  -->

		<div class="preloader">
			<div class="status-mes">
				<div class="bigSqr">
					<div class="square first"></div>
					<div class="square second"></div>
					<div class="square third"></div>
					<div class="square fourth"></div>
				</div>
				<div class="text_loading text-center">loading</div>
			</div>
		</div>

		<!--  Start Header  -->
		<header id="header_area">
			<div class="header_top_area">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="hdr_tp_left">
								<div class="call_area">
									<span class="single_con_add"><i class="fa fa-phone"></i> +8423456789</span>
									<span class="single_con_add"><i class="fa fa-envelope"></i> example@gmail.com</span>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6">
							<ul class="hdr_tp_right text-right">
								@if (Auth::check())
								<li class="lan_area"><a href="#"><i class="fa fa-user "></i>{{ Auth::user()->Ten_tai_khoan  }}<i class="fa fa-caret-down"></i></a>
									<ul class="csub-menu">
										<li><a href="#">Thông tin</a></li>
										@if (Auth::user()->role == 'admin')
										<li><a href="#">Trang Admin</a></li>
										@endif
										<li><a href="{{ route('web.logout') }}">Đăng xuất</a></li>
		
									</ul>
								@else
								<li class="account_area"><a href="{{ route('web.login') }}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<li class="account_area"><a href="{{ route('web.login') }}"><i class="fa fa-lock"></i> Đăng ký</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div> <!--  HEADER START  -->

			{{-- navbar --}}
			@include('user.navbar')
		</header>
		<!--  End Header  -->


        {{-- main --}}

            @yield('main')
        





        <!--  FOOTER START  -->
		<footer class="footer_area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Contacts</h4>
							<ul>
								<li>4060 Reppert Coal Road Jackson, MS 39201 USA</li>
								<li>(+123) 685 78 <br> (+064) 987 245</li>
								<li>Contact@yourcompany.com</li>
							</ul>
						</div>
					</div> <!--  End Col -->

					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->

					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Services</h4>
							<ul>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Wish List</a></li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Order History</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->

					<div class="col-md-3 col-sm-6">
						<div class="single_ftr">
							<h4 class="sf_title">Newsletter</h4>
							<div class="newsletter_form">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
								<form method="post" class="form-inline">
									<input name="EMAIL" id="email" placeholder="Enter Your Email" class="form-control" type="email">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div> <!--  End Col -->

				</div>
			</div>


			<div class="ftr_btm_area">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="ftr_social_icon">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="copyright_text text-center">&copy; 2018 All Rights Reserved FancyShop</p>
						</div>

						<div class="col-sm-4">
							<div class="payment_mthd_icon text-right">
								<ul>
									<li><i class="fa fa-cc-paypal"></i></li>
									<li><i class="fa fa-cc-visa"></i></li>
									<li><i class="fa fa-cc-discover"></i></li>
									<li><i class="fa fa-cc-mastercard"></i></li>
									<li><i class="fa fa-cc-amex"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--  FOOTER END  -->

		<script src="{{asset('assetsAdmin/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/jquery.meanmenu.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/jquery.mixitup.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/waypoints.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/wow.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/venobox.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/simplePlayer.js')}}"></script>
		<script src="{{asset('assetsAdmin/js/main.js')}}"></script>
	</body>

<!-- Mirrored from www.getmasum.com/html-preview/fancyshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 10:05:59 GMT -->
</html>
