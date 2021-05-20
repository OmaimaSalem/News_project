<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Megazine </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('front/css/animate.css') }} ">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('front/css/flexslider.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('front/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<?php
   use App\Models\Categories;
   $categories= Categories::all();
   use App\Models\categories_ar;
   $category_ar= categories_ar::all();
   use App\Models\categories_en;
   $category_en= categories_en::all();

?>


<body>


	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary">
			<h1><a href="/">{{__('home.title')}}
				</a></h1>
			<nav id="colorlib-main-menu" role="navigation">

				<ul>

					<li class="colorlib-active"><a href="/">{{__('home.home')}}</a></li>
					
					<div class="login_info">
						@if (Route::has('login'))
						@auth
						<li class="colorlib-active"> <a id="navbarDropdown" class="sign_up sign-in" href="#">
								Hello:{{ Auth::user()->name }}
							</a></li>
						<li class="colorlib-active"> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a></li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						@else
						<li class="colorlib-active"> <a href="/register" title="" class="sign_up sign-in">Register</a></li>
						<li class="colorlib-active"> <a class="nav-link" href="{{ route('login') }}">Login</a></li>
						@endauth
						@endif

						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<li class="colorlib-active">
							<a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
								<span class="sr-only">(current)</span></a>
						</li>
						@endforeach

					</div>
@if($url=='en')
					@foreach($category_en as $item)

					<li><a 
 href="{{route('categorypost.show',$item['id'])}}">{{$item['name']}}</a></li>

					@endforeach
					@else
					@foreach($category_ar as $item)

					<li><a 
 href="{{route('categorypost.show',$item['id'])}}">{{$item['name']}}</a></li>

					@endforeach
					@endif
				

				</ul>
				


			</nav>

			<div class="colorlib-footer">
				
						<br>
						<br>{{__('home.cr')}} &copy;<script>
							document.write(new Date().getFullYear());
						</script> {{__('home.by')}}| <i class="icon-heart" aria-hidden="true"></i> <a href="#" target="_blank">{{__('home.omaima')}}</a>
						<ul>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
						</ul>
			</div>

		</aside>
		@yield('content')
	</div>

	<!-- jQuery -->
	<script src="{{ asset('front/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('front/js/jquery.flexslider-min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('front/js/magnific-popup-options.js') }}"></script>
	<!-- Owl Carousel -->
	<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
	<!-- Sticky Kit -->
	<script src="{{ asset('front/js/sticky-kit.min.js') }}"></script>


	<!-- MAIN JS -->
	<script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>