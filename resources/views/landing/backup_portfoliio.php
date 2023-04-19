@extends('layouts.app_landing')

@section('content')
	@include('landing.header')

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">
					<h2>WE CREATE EVENT</h2>
					<h1>" EXTRADONARY "</h1>
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<h3>WELCOME TO TUJUH KARYA SINERGI</h3>

				<div class="row content">
					<div class="col-lg-12 p-4
					">
						<h2>
							Lorem Ipsum for your design, website, and copywriting works. Use our tool to generate chunks of text that is free
							from repetition and copyright claims. 3D Images Increase Sales.
						</h2>
						<h1>" We create great events "</h1>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services ">
			<div class="container" data-aos="fade-up">

				<h3>WHAT WE DO</h3>
				<h2>We do it at its best</h2>
				<p class="p-title">We are the pioneer and leading company in managing and organizing an international music festival
					for years in
					Indonesia. We are an expert in executing world-class and memorable events. Collaborate with us, and we will exceed
					your expectation.</p>

				<div class="row">
					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/ticket.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>TICKETING PLATFORM AND REGISTRATION SYSTEM</h4>
							<p>We are the pioneer and leading company in managing and organizing an international music festival for years in
								Indonesia. We are an expert in executing world-class and memorable events. Collaborate with us, and we will
								exceed your expectation.</p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/star.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>ARTIST/TALENT BOOKING</h4>
							<p>Do you need live entertainment for your event? Many years of experience in this field, we have worked with many
								talents, from emerging new talents/artists to well-known talents/artists. We maintain our relationships well and
								with that, we can help you to create impressive events.</p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/partner.svg') }}" width="auto" alt="thumbnail"></div>
							<h4><a href="">SPONSORSHIP AND PARTNERSHIP</a></h4>
							<p>With our strong relationship and extensive experience working with various companies, we can help to provide
								you with marketing services for your events.</p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="400">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/event.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>EVENTS</h4>
							<p>We began our journey in 2005 by creating one of the largest jazz festivals in the world. As years go by, we
								continue to grow and with our experience, we will provide you with professional insights and help to execute your
								event smoothly.</p>
						</div>
					</div>

				</div>

			</div>

			<div class="container" data-aos="fade-up">

				<h3>OUR APPROACH</h3>
				<h2>Idea. Develop. Execute.</h2>

				<div class="row">
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="angka">52</div>
							<h5>EVENT LAUNCHED</h5>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="angka">1,250</div>
							<h5>WORKING HOURS</h5>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="angka">124</div>
							<h5>SATISFIED CLIENTS</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="why-choose-me" data-aos="fade-up">
				<h3>WHY CHOOSE TUJUH KARYA SINERGI PRODUCTION?</h3>
				<h2>We listen. We discuss. <br />We advise.We Provide.</h2>

				<div class="row">
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/creative.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>We are creative
							</h4>
							<p>One of the keys to a successful event is a creative mind. Our team is full of passion, we crave for challenges
								that gives excitement, and ready to have a creative discussion with you to produce a splendid event.</p>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/listener.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>We are a good listener</h4>
							<p>Our team is filled with people passionate about events. Share your thoughts and we will help to develop the
								concept, design, and execute your event from beginning to end.</p>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/time.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>We deliver on time</h4>
							<p>Time is the most essential part of crafting an event. We are ready to meet your deadlines in executing an event
								that is astounding.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Services Section -->


		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio services">
			<div class="" data-aos="fade-up">

				<h3>RECENT CASE STUDIES</h3>
				<h2>What we have done so far.</h2>

				<ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-app">App</li>
					<li data-filter=".filter-card">Card</li>
					<li data-filter=".filter-web">Web</li>
				</ul>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					{{-- <div class="col-lg-1"></div> --}}
					<div class="col-lg-2 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_1.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 1</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_1.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-web p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_4.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 2</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_4.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-card p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_5.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Card 2</h4>
							<p>Card</p>
							<a href="{{ asset('img/portfolio/images_5.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-web p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_3.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<a href="{{ asset('img/portfolio/images_3.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_6.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_6.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 portfolio-item filter-web p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_3.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<a href="{{ asset('img/portfolio/images_3.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_6.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_6.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>


					{{-- START BARIS KE 2 --}}


					<div class="col-lg-2 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_7.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 1</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_7.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 portfolio-item filter-web p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_9.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="{{ asset('img/portfolio/images_9.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>


					<div class="col-lg-2 col-md-4 portfolio-item filter-card p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_10.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Card 2</h4>
							<p>Card</p>
							<a href="{{ asset('img/portfolio/images_10.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-web p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_12.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<a href="{{ asset('img/portfolio/images_12.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_6.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_6.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 portfolio-item filter-web p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_3.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<a href="{{ asset('img/portfolio/images_3.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 portfolio-item filter-app p-0">
						<div class="portfolio-img"><img src="{{ asset('img/portfolio/images_6.png') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<a href="{{ asset('img/portfolio/images_6.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Section -->


		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients section-bg services">
			<div class="container" data-aos="fade-up">
				<h3>WHY CHOOSE TUJUH KARYA SINERGI PRODUCTION?</h3>

				<div class="row" data-aos="zoom-in">

					<div class="col-lg-2 col-md-4 col-4 d-flex align-items-center justify-content-center offset-lg-2">
						<img src="{{ asset('img/client/client-1.svg') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-4 col-4 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client-2.svg') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-4 col-4 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client-3.svg') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-4 col-4 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client-4.svg') }}" class="img-fluid" alt="Client">
					</div>

				</div>

			</div>
		</section><!-- End Cliens Section -->


		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-5 d-flex align-items-stretch">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>

							<div class="email">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>info@example.com</p>
							</div>

							<div class="phone">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>+1 5589 55488 55s</p>
							</div>

							<iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
								frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
						</div>

					</div>

					<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="form-group col-md-6">
									<label for="name">Your Name</label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
								<div class="form-group col-md-6">
									<label for="name">Your Email</label>
									<input type="email" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" required>
							</div>
							<div class="form-group">
								<label for="name">Message</label>
								<textarea class="form-control" name="message" rows="10" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->
	@include('landing.footer')
@endsection
