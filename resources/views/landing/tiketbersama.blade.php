@extends('layouts.app_landing')

@section('content')
    @include('landing.header')


    <section id="header-image" class="text-center align-items-center bg-system-event-tiketbersama">
        <div class="wrapper-text">
            <img src="{{ asset('img/tiketbersama/tiketbersama_logo.png') }}" alt="Tiket Bersama Logo" class="img img-logo">
            <h2>{{ $data['header_h2'] }}</h2>
            <h5>{{ $data['header_h5'] }}</h5>
        </div>

    </section>
    <main id="main">
        <div data-aos="fade-up">
            <img src="{{ asset('img/tiketbersama/content_1.png') }}" alt="Content Tiket Bersama"
                class="img-content-tiketbersama">
        </div>


        <!-- ======= About Us Section ======= -->
        <section id="website" class="about pt-120 pb-0">
            <div class="container" data-aos="fade-up">
                <h3>{{ config('config_page.wording_about_h3') }}</h3>

                <div class="row content mt-4 mb-4 pb-4 pt-4">
                    <div class="offset-sm-1 col-lg-10 col-sm-12 p-4">
                        <h2>{{ $data['isi_h2_sistem'] }}</h2>
                        <h5 class="text-center">{{ $data['isi_h5_sistem'] }}</h5>
                    </div>
                </div>
                <div class="row content gy-4">
                    <div class="col-lg-4 col-sm-12 p-4">
                        <div class="wrapper-website-text position-relative ps-2 pt-2">
                            <div class="image-website">
                                <img src="{{ asset('img/website/website_icon_1.png') }}" alt="Icon 1"
                                    style="width: 64px; height:64px">
                            </div>
                            <div>
                                <h3>Design Menarik dan fungsionalitas</h3>
                                <h5>Kami dapat membantu anda untuk meningkatkan keuntungan dalam design website untuk
                                    produk/bisnis anda</h5>
                            </div>
                            <h1>1</h1>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 p-4">
                        <div class="wrapper-website-text position-relative ps-2 pt-2">
                            <div class="image-website">
                                <img src="{{ asset('img/website/website_icon_2.png') }}" alt="Icon 1"
                                    style="width: 64px; height:64px">
                            </div>
                            <div>
                                <h3>Pembuatan Website Profesional</h3>
                                <h5>Kami berpengalaman dalam bekerja dan mempunyai tenaga ahli di bidang yang sudah terlatih
                                </h5>
                            </div>
                            <h1>2</h1>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 p-4">
                        <div class="wrapper-website-text position-relative ps-2 pt-2">
                            <div class="image-website">
                                <img src="{{ asset('img/website/website_icon_3.png') }}" alt="Icon 1"
                                    style="width: 64px; height:64px">
                            </div>
                            <div>
                                <h3>Cepat dan tepat</h3>
                                <h5>Kami sangat memperhatikan detail dan waktu untuk mendapatkan produk yang bagus dan
                                    sesuai untuk bisnis anda
                                </h5>
                            </div>
                            <h1>3</h1>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                            <img src="{{ asset('img/tiketbersama/content_2.png') }}" alt="Content Panji"
                                style="max-width: 100%">
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div class="row content mt-4 mb-4 pb-4 pt-4">
                            <div class="offset-sm-1 col-lg-10 col-sm-12 p-4">
                                <h2>{{ $data['isi_h2_dana'] }}</h2>
                                <h5 class="text-center">{{ $data['isi_h5_dana'] }}</h5>
                            </div>
                        </div>
                        <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                            <img src="{{ asset('img/tiketbersama/content_3.png') }}" alt="Content Panji"
                                style="max-width: 100%">
                        </div>
                    </div>
                </div>
            </div>

            <section id="etiket" class="text-center align-items-center bg-system-etiket p-0" data-aos="fade-up">
                <div class="container">
                    <div class="row content">
                        <div class="col-lg-6 col-sm-12 p-4 pb-0">
                            <img src="{{ asset('img/tiketbersama/content_6.png') }}" alt="Content Seating"
                                style="max-width: 100%">
                        </div>
                        <div class="col-lg-6 col-sm-12 p-4 pb-0">
                            <h2 class="text-start p-0">{{ $data['isi_h2_fitur_etiket'] }}</h2>
                            <h5 class="text-start">{{ $data['isi_h5_fitur_etiket'] }}</h5>
                            <div class="wrapper-link">
                                <a class="text-start" href="https://tiketbersama.com">COBA YUK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container" data-aos="fade-up">
                <div class="row content gy-4">
                    <div data-aos="fade-up">
                        <div class="row content mt-4 mb-4 pb-4 pt-4">
                            <div class="offset-sm-1 col-lg-10 col-sm-12 p-4">
                                <h2>{{ $data['isi_h2_etiket'] }}</h2>
                                <h5 class="text-center">{{ $data['isi_h5_etiket'] }}</h5>
                            </div>
                        </div>
                        <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                            <img src="{{ asset('img/tiketbersama/content_4.png') }}" alt="Content Panji"
                                style="max-width: 100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row content gy-4">
                    <div data-aos="fade-up">
                        <div class="row content mt-4 pt-4">
                            <div class="col-lg-6 col-sm-12 p-4 pb-0">
                                <h2 class="text-start p-0">{{ $data['isi_h2_seating'] }}</h2>
                                <h5 class="text-start">{{ $data['isi_h5_seating'] }}</h5>
                            </div>
                            <div class="col-lg-6 col-sm-12 p-4 pb-0">

                                <img src="{{ asset('img/tiketbersama/content_5.png') }}" alt="Content Seating"
                                    style="max-width: 100%">
                            </div>
                        </div>
                    </div>
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
