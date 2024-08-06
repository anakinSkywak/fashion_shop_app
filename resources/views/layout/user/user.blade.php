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
	<link rel="stylesheet" href="{{asset('assetsAdmin/style.css') }}">
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
		@include('layout.user.header')
		<!--  End Header  -->


        {{-- main --}}

            @yield('main')
        





        <!--  FOOTER START  -->
		@include('layout.user.footer')
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
