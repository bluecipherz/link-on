<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>LinkOn - @yield('title')</title>

	<link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('/css/custom.css') }}" type="text/css" rel="stylesheet"/>
	@yield('csslinks')

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar  navbar-fixed-top ">
		<div class="navbar-cust">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand icon-cust" href="#">LinkOn</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-a-cust">
						<li><a href="{{ asset('home') }}">Home</a></li>
					</ul>
	<!--
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Login</a></li>
							<li><a href="{{ url('/auth/register') }}">Register</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								</ul>
							</li>
						@endif
					</ul>
	-->				
				</div>
			</div>
		</div>
		@yield('adminTools')
	</nav>
	
		
		
	<div class="fakeNav"></div>
	@yield('fakeAdminHead')
	@yield('content')
	
	<footer class="only_footer footer-cust ">
		<div class="container">
			<div class="row">
				<div class="col-md-2 visible-md visible-lg">
					<ul class="footer_links">
						<li><a href="#">Services</a></li>
						<li><a href="#">Community</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Sitemap</a></li>
					</ul>
				</div>
				<div class="col-md-2 visible-md visible-lg">
					<ul class="footer_links">
						<li><a href="#">Careers</a></li>
						<li><a href="#">Donate</a></li>
						<li><a href="#">Contribute</a></li>
						<li><a href="#">Partners</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="logospace untouchable">
						<span>
							<div class=" pf-icon-cust" >LinkOn</div>
							&copy; 2015 LinkOn education
						</span>
					</div>
				</div>
				<div class="col-md-2 visible-md visible-lg">
					<ul class="footer_links">
						<li><a href="#">Sponsors</a></li>
						<li><a href="#">Terms Of Service</a></li>
						<li><a href="#">Legal notices</a></li>
						<li><a href="#">About</a></li>
					</ul>
				</div>
				<div class="col-md-2 visible-md visible-lg">
					<ul class="footer_links">
						<li><a href="#">Support</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Navigate</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<!--
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	-->
	<script src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	<script src="{{ asset('/js/script.js') }}"></script>
	<script src="{{ asset('/js/bczHelpSystem.js') }}"></script>
	@yield('jslinks')
</body>
</html>
