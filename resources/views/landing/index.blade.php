@extends('layouts.app_landing')

@section('content')
	@include('landing.header')


	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate"
					data-aos="fade-up" data-aos-delay="200">
					<h3>BMK berfokus pada pengembangan solusi teknologi & percetakan</h3>
					<h4>Kami berkomitmen untuk memberikan solusi teknologi yang inovath4, handal, dan mudah digunakan.</h4>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
					{{-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> --}}
					<img src="{{ asset('img/hero/hero_1.png') }}" alt="">
					<img src="{{ asset('img/hero/hero_2.png') }}" alt="">
					<img src="{{ asset('img/hero/hero_3.png') }}" alt="">
					<img src="{{ asset('img/hero/hero_4.png') }}" alt="">
					<img src="{{ asset('img/hero/hero_5.png') }}" alt="">
				</div>
			</div>
		</div>

	</section>

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<h3>{{ config('config_page.wording_about_h3') }}</h3>

				<div class="row content">
					<div class="col-lg-12 p-4">
						<h2>Layanan BMK untuk solusi semua</h2>
						<h3>Maksimalkan bisnis anda dengan solusi terbaik dari BMK</h3>
					</div>
				</div>
				<div class="row">

					<div class="col-sm-12 col-lg-3 ">
						<div class="card-layanan">
							<h5>Percetakan</h5>
							<div class="wrapper-img">
								<img src="{{ asset('img/about/about_1.png') }}" alt="Percetakan">
							</div>
							<p>Kami dapat membantu anda dalam hal percetakan dengan hasil yang sangat baik untuk maksimalkan produk anda</p>
						</div>
					</div>
					<div class="col-sm-12 col-lg-3">
						<div class="card-layanan">
							<h5>Sistem Onground Event</h5>
							<div class="wrapper-img">
								<img src="{{ asset('img/about/about_2.png') }}" alt="Sistem Onground Event">
							</div>
							<p>Kami telah bekerjasama dengan berbagai promotor acara dan tempat penyelenggaraan acara</p>
						</div>

					</div>
					<div class="col-sm-12 col-lg-3">
						<div class="card-layanan">
							<h5>Pembuatan Website</h5>
							<div class="wrapper-img">
								<img src="{{ asset('img/about/about_3.png') }}" alt="Pembuatan Website">
							</div>
							<p>Kami memberikan layanan untuk Company Profile, Perusahaan, Bisnis, Toko Online, Sekolah/Universitas, Berita,
								dan
								lainya</p>
						</div>

					</div>
					<div class="col-sm-12 col-lg-3">
						<div class="card-layanan">
							<h5>Pembuatan Furniture</h5>

							<div class="wrapper-img">
								<img src="{{ asset('img/about/about_4.png') }}" alt="Pembuatan Furniture">
							</div>
							<p>Kami dapat membuat berbagai macam Furniture mulai dari kebutuhan Kantor, Apartemen, serta Rumah.</p>
						</div>

					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients section-bg services">
			<div class="container" data-aos="fade-up">
				<h3 class="mb-4">CLIENTS AND PARTNERS</h3>

				<div class="row" data-aos="zoom-in">

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/1.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/2.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/3.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/4.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/5.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/6.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/7.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/8.png') }}" class="img-fluid" alt="Client">
					</div>

				</div>
			</div>
		</section><!-- End Cliens Section -->

		<section id="client-services" class="client-services services">

			<div class="container" data-aos="fade-up">
				<h3>TESTIMONIAL</h3>
				<h2></h2>
				<div class="bungkus-swiper">

					<swiper-container class="mySwiper" space-between="30" slides-per-view="auto" pagination="true"
						pagination-clickable="true" navigation="true">
						<swiper-slide>
							<div class="row">
								<div class="col-sm-12 d-flex bungkus-notes">
									<div>
										<img src="{{ asset('img/notes/notes_1.png') }}" alt="notes" width="90px" height="90px">
									</div>
									<div class="kanan">
										<div class="title-name text-start">@nonaendahmukti</div>
										<div class="title-type text-start"></div>
										<div class="title-description text-start">
											Pokoknya wajib di ulang lagi.. Sampai sekarang aku belum bisa moveon sama konser ini petdjaahh banget.
											kereeenn pokoknya bekasi ambyarrr. nonton dari kering sampe basaahh yang penting bisa ambyarr bareng
											@pestasemalaminggu.
										</div>
									</div>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="row">
								<div class="col-sm-12 d-flex bungkus-notes">
									<div>
										<img src="{{ asset('img/notes/notes_2.png') }}" alt="notes" width="90px" height="90px">
									</div>
									<div class="kanan">
										<div class="title-name text-start">@kykymus21</div>
										<div class="title-type text-start"></div>
										<div class="title-description text-start">
											Vol.4 nya harus lebih pecah @pestasemalaminggu HAPPY ASMARA DENNY CAKNAN GUYON WATON,NDARBOYGENK AFTERSHINE.
											HARUSSS GW BAKAL CAW LG.</div>
									</div>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="row">
								<div class="col-sm-12 d-flex bungkus-notes">
									<div>
										<img src="{{ asset('img/notes/notes_3.png') }}" alt="notes" width="90px" height="90px">
									</div>
									<div class="kanan">
										<div class="title-name text-start">@trisetyodany15</div>
										<div class="title-type text-start"></div>
										<div class="title-description text-start">
											Jujur,awalnya sempet ngira acaranya bakal kacau kaya acara sebelah yg di Bogor karena namanya hampir sama. Eh
											ternyata PSM the best banget Gak nyesel gua beli tiket dari bulan Juli hehehe pokoknya di segerakan Vol 4 ya
											min jangan lama lama jedanya hehehe semoga gs nya lebih mantep Dan request undang @armadaband ya min karena
											gua salah satu PASUKAN ARMADA hehehe</div>
									</div>
								</div>
							</div>
						</swiper-slide>
					</swiper-container>
				</div>

			</div>
		</section>

		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')
@endsection
