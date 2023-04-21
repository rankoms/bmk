@extends('layouts.app_landing')

@section('content')
	@include('landing.header')


	<section id="header-image" class="text-center align-items-center">
		<div class="wrapper-text">
			<h2>{{ $data['header_h2'] }}</h2>
			<h5>{{ $data['header_h5'] }}</h5>
		</div>

	</section>

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<h3>{{ config('config_page.wording_about_h3') }}</h3>

				<div class="row content mt-4 mb-4 pb-4 pt-4">
					<div class="col-lg-12 p-4">
						<h2>{{ $data['isi_h2_sistem'] }}</h2>
						<h5 class="text-center">{{ $data['isi_h5_sistem'] }}</h5>
					</div>
					<div class="offset-lg-2 col-lg-8 col-sm-12 justify-content-center">
						<img src="{{ asset('img/sistem/sistem_1.png') }}" alt="Sistem Redemption" style="max-width: 100%">
					</div>

					<div class="col-lg-12 p-4">
						<h2>{{ $data['isi_h2_mobile'] }}</h2>
						<h5 class="text-center">{{ $data['isi_h5_mobile'] }}</h5>
					</div>
					<div class="col-lg-12 col-sm-12 justify-content-center">
						<img src="{{ asset('img/sistem/sistem_2.png') }}" alt="Mobile Scanner" style="max-width: 100%">
					</div>
				</div>
				<div class="row content dashboard mt-4 mb-4 pb-4 pt-4">
					<div class="col-lg-5 col-sm-12">
						<h2 class="text-start p-0 dashboard-h2">Solusi Data Event</h2>
						<div class="wrapper-dashboard position-relative">
							<div class="garis-oren"></div>
							<div class="title">
								Dashboard
							</div>
							<div class="isi">
								Untuk melihat seluruh registrasi dan penjualan
							</div>
						</div>
						<div class="wrapper-dashboard position-relative">
							<div class="garis-oren"></div>
							<div class="title">
								Meningkatkan Efisiensi
							</div>
							<div class="isi">
								Dapat mengelola data dengan lebih baik dan cepat
							</div>
						</div>
						<div class="wrapper-dashboard position-relative">
							<div class="garis-oren"></div>
							<div class="title">
								Pengelolaan Data
							</div>
							<div class="isi">Data yang dikumpulkan meliputi informasi tentang peserta acara, lokasi, waktu, biaya, dan
								lain-lain.
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-sm-12">
						<img src="{{ asset('img/sistem/sistem_3.png') }}" alt="Dashboard" style="max-width: 100%">
					</div>
				</div>
				<div class="row content security mt-4 mb-4 pb-4 pt-4">
					<div class="col-lg-7 col-sm-12">
						<img src="{{ asset('img/sistem/sistem_4.png') }}" alt="Dashboard" style="max-width: 100%">
					</div>
					<div class="col-lg-5 col-sm-12">
						<h2 class="p-0 text-lg-start text-sm-center">Security CCTV Event
						</h2>
						<h5 class="p-0 text-lg-start text-sm-center">Membantu meningkatkan pengalaman peserta acara dengan memantau
							keramaian dan antrean di lokasi acara. Hal ini
							dapat membantu penyelenggara acara untuk mengatur lalu lintas dan memastikan bahwa peserta acara dapat mengakses
							fasilitas dan layanan dengan mudah dan aman.
						</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 offset-lg-2 col-lg-8">
						<h2 class="p-0 text-center">Penyedia Manpower Event</h2>
						<h5 class="p-0 text-center">Jangan Biarkan Event-Mu Kehilangan Momentum! Manpower Siap Membantu
							Mewujudkan Acaramu
							Menjadi Sukses dengan
							Tim Profesional dan Berpengalaman. Yuk, Bermitra Bersama Manpower!</h5>
					</div>
				</div>
			</div>
		</section><!-- End About Us Section -->
		<img src="{{ asset('img/sistem/sistem_5.png') }}" alt="Man Power" style="max-width: 100%">

		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')
@endsection
