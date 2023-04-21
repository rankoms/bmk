@extends('layouts.app_landing')

@section('content')
	@include('landing.header')


	<section id="header-image" class="text-center align-items-center">
		<div class="wrapper-text">
			<h2>Menyediakan Produksi Percetakan</h2>
			<h5>Kami menyediakan berbagai macam bahan cetak seperti banner, sticker, mug, lanyard, buku, majalah, brosur, kartu
				nama, kalender, dan sebagainya.</h5>
		</div>

	</section>

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<h3>{{ config('config_page.wording_about_h3') }}</h3>

				<div class="row content">
					<div class="col-lg-12 p-4">
						<h2>Teknologi Tiket Event</h2>
						<h5 class="text-center">BMK menghadirkan berbagai jenis tiket untuk menunjang keberlangsungan event dengan berbagai
							skala mulai dari kecil hingga besar</h5>
					</div>
				</div>
				<div class="row gy-4">

					<div class="col-sm-6 col-lg-4">
						<div class="card">
							<img src="{{ asset('img/teknologi/teknologi_1.png') }}" alt="Tiket">
							<div class="wrapper-text">
								Tiket
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4">
						<div class="card">
							<img src="{{ asset('img/teknologi/teknologi_2.png') }}" alt="Tissue Tiket">
							<div class="wrapper-text">
								Tissue Tiket
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4">
						<div class="card">
							<img src="{{ asset('img/teknologi/teknologi_3.png') }}" alt="ID Card">
							<div class="wrapper-text">
								ID Card
							</div>
						</div>
					</div>
				</div>
				<div class="row row-lainnya">
					<div class="col-lg-12">
						<h2>Produksi Percetakan Lainya</h2>
					</div>
				</div>
				<div class="row gy-4">
					@foreach ($lainnya as $key => $value)
						<div class="col-sm-6 col-lg-4">
							<div class="card">
								<img src="{{ asset('img/lainnya/' . $value['image']) }}" alt="{{ $value['name'] }}">
								<div class="wrapper-text">
									{{ $value['name'] }}
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section><!-- End About Us Section -->
		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
@endsection
