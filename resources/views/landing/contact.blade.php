<!-- ======= Contact Section ======= -->
<section id="contact" class="contact p-0">
	<div data-aos="fade-up">
		<div class="row">
			<div class="col-lg-6 d-flex align-items-stretch p-0">
				<div class="info">
					{!! \config('config_page.iframe') !!}
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 align-items-stretch kiri">
				<div class="wrapper-text info">
					<h5>HELLO BMK</h5>
					<h3>Kami siap membantu anda!</h3>

					<div class="row">
						<div class="col-lg-6">

							<div class="email d-flex align-self-baseline">
								<img src="{{ asset('img/contact/phone.svg') }}" alt="Email">
								<p>{{ \config('config_page.phone') }}</p>
							</div>
							<div class="email d-flex align-self-baseline pt-4">
								<img src="{{ asset('img/contact/email.svg') }}" alt="Email">
								<p>{{ \config('config_page.email') }}</p>
							</div>
						</div>
						<div class="col-lg-6 pt-4">

							<div class="address d-flex align-self-baseline">
								<img src="{{ asset('img/contact/address.svg') }}" alt="Address">
								<p>{{ \config('config_page.alamat') }}</p>
							</div>
						</div>
					</div>


					<form id="formContact" class="php-email-form">
						@csrf
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="10" placeholder="Message" required></textarea>
						</div>
						<div class="text-end"><button type="submit" id="btn-save">Sumbit</button></div>
					</form>
				</div>
			</div>

		</div>


		<div class="row padding-contact">
			<div class="col-lg-12 col-sm-12 d-flex align-items-center">
				<img src="{{ asset('logo.png') }}" alt="Logo BMK" style="max-width: 100%" class="me-4 logo">
				<h5 class="ms-4">Kami berkomitmen untuk memberikan solusi teknologi yang inovatif, handal, dan mudah digunakan.
				</h5>
			</div>
			{{-- <div class="col-lg-3 col-sm-6 text-center">
				<a href="" class="d-block">Company</a>
				<a href="" class="d-block">About</a>
			</div>
			<div class="col-lg-3 col-sm-6 d-flex">
				<div class="address">
					<a href="{{ config('config_page.sosmed_linkedin') }}" class="me-3">

						<i class="bi bi-linkedin"></i>
					</a>
				</div>
				<div class="address">
					<a href="{{ config('config_page.sosmed_facebook') }}" class="me-3">

						<i class="bi bi-facebook"></i>
					</a>
				</div>

				<div class="email">
					<a href="{{ config('config_page.sosmed_twitter') }}" class="me-3">
						<i class="bi bi-twitter"></i>
					</a>
				</div>

				<div class="phone">
					<a href="{{ config('config_page.sosmed_instagram') }}" class="me-3">
						<i class="bi bi-instagram"></i>
					</a>
				</div>
			</div> --}}

			@include('landing.footer')
		</div>

	</div>
</section><!-- End Contact Section -->
