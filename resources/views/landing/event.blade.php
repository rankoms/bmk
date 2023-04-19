@extends('layouts.app_landing')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
	#header {

		background: radial-gradient(79.63% 79.63% at 70.87% 20.37%, #1A0653 0%, #3C0046 100%)
			/* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */
		;
	}
</style>
@section('content')
	@include('landing.header_new_page')

	<main id="main">
		<!-- ======= Services Section ======= -->
		<section id="event" class="event page-event">
			<div class="slider">

				<swiper-container class="mySwiper" space-between="30" slides-per-view="auto" pagination="true"
					pagination-clickable="true" navigation="true" loop="true" slides-per-view="2" initial-slide="2">
					@foreach ($event['slider'] as $key => $value)
						<swiper-slide>
							<img src="{{ asset('img/event/' . $value) }}" alt="notes">
						</swiper-slide>
					@endforeach
				</swiper-container>
			</div>
			<div class="container" data-aos="fade-up">
				<h3 class="text-center"></h3>
				<h2 class="text-center">Active</h2>

				<div class="row event-list past pt-4">
					@foreach ($event['active'] as $key => $value)
						<a href="{{ $value['link'] }}" class="col-xl-3 col-md-6 col-sm-6 align-items-stretch mt-4 mt-md-0 mb-4">
							<div>
								<img src="{{ asset('img/event/' . $value['images']) }}" alt="">
							</div>
							<div class="wrapper-event">
								<div class="row wrapper-event-row">
									<div class="col-6 location"><i class="fa fa-calendar-alt me-2"></i> {{ $value['tanggal'] }}</div>
									<div class="col-6 text-end location"><i class="fa fa-location-dot me-2"></i> {{ $value['location'] }}</div>
								</div>
								<div class="row">
									<h4>{{ $value['deskripsi'] }}</h4>
								</div>
							</div>
							<div class="buy-now">
								Buy Now
							</div>
						</a>
					@endforeach
				</div>
			</div>
			<div class="container" data-aos="fade-up">
				<h3 class="text-center"></h3>
				<h2 class="text-center">Past</h2>
				<div class="row event-list pt-4">
					@foreach ($event['pass'] as $key => $value)
						<div class="col-xl-3 col-md-6 col-sm-6 align-items-stretch mt-4 mt-md-0 mb-4">
							<div>
								<img src="{{ asset('img/event/' . $value['images']) }}" alt="">
							</div>
							<div class="wrapper-event">
								<div class="row wrapper-event-row">
									<div class="col-6 location"><i class="fa fa-calendar-alt me-2"></i> {{ $value['tanggal'] }}</div>
									<div class="col-6 text-end location"><i class="fa fa-location-dot me-2"></i> {{ $value['location'] }}</div>
								</div>
								<div class="row">
									<h4>{{ $value['deskripsi'] }}</h4>
								</div>
							</div>
						</div>
					@endforeach
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
