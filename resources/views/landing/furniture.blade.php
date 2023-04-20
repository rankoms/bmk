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
				<div class="row">
					<div class="col-lg-12 p-4">
						<h2>Berbagai pilihan furnitur berkualitas</h2>
						<h5 class="text-center">Kami menawarkan berbagai pilihan furnitur berkualitas, mulai dari kursi, meja, tempat
							tidur, lemari, hingga dekorasi rumah. Semua produk kami dibuat dengan bahan berkualitas tinggi dan desain yang
							menarik, sehingga Anda dapat mempercayakan kebutuhan furnitur rumah Anda kepada kami.</h5>
					</div>
				</div>
				<div class="row gy-4">
					@foreach ($furniture as $key => $value)
						<div class="col-sm-12 col-lg-4">
							<div class="card">
								<img src="{{ asset('img/furniture/' . $value['image']) }}" alt="{{ $value['name'] }}">
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
	@include('landing.footer')
@endsection
