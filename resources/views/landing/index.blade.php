@extends('layouts.app_landing')

@section('content')
	@include('landing.header')


	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate"
					data-aos="fade-up" data-aos-delay="200">
					<h1>BMK berfokus pada pengembangan solusi teknologi & percetakan</h1>
					<h5>Kami berkomitmen untuk memberikan solusi teknologi yang inovath5, handal, dan mudah digunakan.</h4>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
					<img src="{{ asset('img/hero/hero_0.png') }}" alt="Gambar">
				</div>
			</div>
		</div>

	</section>

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about p-0">
			<div class="container" data-aos="fade-up">
				<h3>{{ config('config_page.wording_about_h3') }}</h3>

				<div class="row content">
					<div class="col-lg-12 p-4 pt-0">
						<h2>Layanan BMK untuk solusi semua</h2>
						<h5 class="text-center">Maksimalkan bisnis anda dengan solusi terbaik dari BMK</h5>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->
		<section id="about" class="about p-0">
			<div class="container" data-aos="fade-up">

				<div class="row gy-4">
					<div class="col-sm-6 col-lg-3 ">
						<a href="{{ route('percetakan') }}">
							<div class="card-layanan">
								<h5>Percetakan</h5>
								<div class="wrapper-img">
									<img src="{{ asset('img/about/about_1.png') }}" alt="Percetakan">
								</div>
								<p>Kami dapat membantu anda dalam hal percetakan dengan hasil yang sangat baik untuk maksimalkan produk anda</p>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-lg-3">
						<a href="{{ route('sistem') }}">
							<div class="card-layanan">
								<h5>Sistem Onground Event</h5>
								<div class="wrapper-img">
									<img src="{{ asset('img/about/about_2.png') }}" alt="Sistem Onground Event">
								</div>
								<p>Kami telah bekerjasama dengan berbagai promotor acara dan tempat penyelenggaraan acara</p>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-lg-3">
						<a href="{{ route('website') }}">
							<div class="card-layanan">
								<h5>Pembuatan Website</h5>
								<div class="wrapper-img">
									<img src="{{ asset('img/about/about_3.png') }}" alt="Pembuatan Website">
								</div>
								<p>Kami memberikan layanan untuk Company Profile, Perusahaan, Bisnis, Toko Online, Sekolah/Universitas, Berita,
									dan
									lainya</p>
							</div>
						</a>

					</div>
					<div class="col-sm-6 col-lg-3">
						<a href="{{ route('furniture') }}">
							<div class="card-layanan">
								<h5>Pembuatan Furniture</h5>

								<div class="wrapper-img">
									<img src="{{ asset('img/about/about_4.png') }}" alt="Pembuatan Furniture">
								</div>
								<p>Kami dapat membuat berbagai macam Furniture mulai dari kebutuhan Kantor, Apartemen, serta Rumah.</p>
							</div>
						</a>

					</div>
				</div>
			</div>
		</section>

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients services">
			<div class="container" data-aos="fade-up">
				<h2 class="mb-4">Sponsor & Partners</h2>

				<div class="row" data-aos="zoom-in">

					<div class="col-lg-2 col-md-6 col-sm-0 d-flex align-items-center justify-content-center">
					</div>
					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client_1.png') }}" class="img-fluid" alt="Client">
					</div>
					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client_2.png') }}" class="img-fluid" alt="Client">
					</div>
					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client_3.png') }}" class="img-fluid" alt="Client">
					</div>
					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client_4.png') }}" class="img-fluid" alt="Client">
					</div>

				</div>
			</div>
		</section><!-- End Cliens Section -->

		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')
@endsection
