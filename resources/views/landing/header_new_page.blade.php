<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
	<div class="container d-flex align-items-center justify-content-between">

		<!-- Uncomment below if you prefer to use an image logo -->
		<div class="d-flex align-items-center">
			<a href="{{ route('index') }}" class="logo me-2 ms-4"><img src="{{ asset('logo.png') }}" alt=""
					class="img-fluid"></a>
			{{-- <a href="{{ route('index') }}" class="logo me-2 ms-4"><img src="{{ asset('landing/img/logo.png') }}" alt=""
					class="img-fluid"></a> --}}

		</div>
		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto" href="{{ route('index') }}">Home</a></li>
	
				<li><a class="nav-link scrollto" href="{{ route('index', ['#about']) }}">About</a></li>
				<li><a class="nav-link scrollto" href="{{ route('index', ['#services']) }}">Services</a></li>
				@if (Request::segment(1) == 'galery')
					<li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
				@else
					<li><a class="nav-link scrollto" href="{{ route('galery', ['#about']) }}">Gallery</a></li>
				@endif
				<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				@if (Request::segment(1) == 'event')
					<li><a class="nav-link scrollto" href="#event">Event</a></li>
				@else
					<li><a class="nav-link scrollto" href="{{ route('event') }}">Event</a></li>
				@endif
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

	</div>
</header><!-- End Header -->
