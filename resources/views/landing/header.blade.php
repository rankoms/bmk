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
				<li><a class="nav-link {{ Request::segment(1) == 'percetakan' ? 'active' : '' }}"
						href="{{ route('percetakan') }}">Percetakan</a></li>
				<li><a class="nav-link  {{ Request::segment(1) == 'sistem' ? 'active' : '' }}" href="{{ route('sistem') }}">Sistem
						Onground Event</a></li>
				<li><a class="nav-link {{ Request::segment(1) == 'website' ? 'active' : '' }}"
						href="{{ route('website') }}">Pembuatan Website</a></li>
				<li><a class="nav-link {{ Request::segment(1) == 'furniture' ? 'active' : '' }}"
						href="{{ route('furniture') }}">Pembuatan Furniture</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

	</div>
</header><!-- End Header -->
