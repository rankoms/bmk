<!-- ======= Contact Section ======= -->
<section id="contact" class="contact p-0">
	<div data-aos="fade-up">
		<div class="row">
			<div class="col-lg-7 mt-5 mt-lg-0 align-items-stretch kiri p-4">
				<div class="wrapper-text info">

					<h3>INFORMASI LEBIH LANJUT</h3>

					<h2></h2>

					<div class="row">
						<!-- <div class="col-lg-4">

							<div class="phone d-flex">
								<img src="{{ asset('img/contact/phone.svg') }}" alt="Phone">
								<p></p>
							</div>
						</div> -->
						<div class="col-lg-12">

							<div class="address d-flex align-self-baseline">
								<img src="{{ asset('img/contact/address.svg') }}" alt="Address">
								<p>Jl. Bulevar Ahmad Yani Kav. K.01 Margamulya, Bekasi Utara, Kota Bekasi Jawa Barat</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">

							<div class="email d-flex align-self-baseline">
								<img src="{{ asset('img/contact/email.svg') }}" alt="Email">
								<p>tks@tujuhkaryasinergi.com</p>
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

					<div class="d-flex wrapper-sosmed">

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
					</div>
				</div>
			</div>
			<div class="col-lg-5 d-flex align-items-stretch p-0">
				<div class="info">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1447371783606!2d106.9968265170559!3d-6.225511537969303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c19f0213fe5%3A0x46e0c2f6fff4d965!2sJl.%20Bulevar%20Ahmad%20Yani%2C%20RT.006%2FRW.002%2C%20Marga%20Mulya%2C%20Kec.%20Bekasi%20Utara%2C%20Kota%20Bks%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1680365391398!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

			</div>

		</div>

	</div>
</section><!-- End Contact Section -->
