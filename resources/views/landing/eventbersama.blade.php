@extends('layouts.app_landing')

@section('content')
    @include('landing.header')


    <section id="header-image" class="text-center align-items-center bg-system-event-eventbersama">
        <div class="wrapper-text">
            <img src="{{ asset('img/eventbersama/eventbersama_logo.png') }}" alt="Tiket Bersama Logo" class="img img-logo">
            <h2>{{ $data['header_h2'] }}</h2>
            <h5>{{ $data['header_h5'] }}</h5>
        </div>

    </section>
    <main id="main">
        <div data-aos="fade-up">
            <img src="{{ asset('img/eventbersama/content_1.png') }}" alt="Content Event Bersama"
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
                    <div data-aos="fade-up">
                        <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                            <img src="{{ asset('img/eventbersama/content_2.png') }}" alt="Redeemption"
                                style="max-width: 100%">
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div class="row content mt-4 mb-4 pb-4 pt-4">
                            <div class="offset-sm-1 col-lg-10 col-sm-12 p-4">
                                <h2>{{ $data['isi_h2_mobile'] }}</h2>
                                <h5 class="text-center">{{ $data['isi_h5_mobile'] }}</h5>
                            </div>
                        </div>
                        <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                            <img src="{{ asset('img/eventbersama/content_3.png') }}" alt="Mobile Scanner"
                                style="max-width: 100%">
                        </div>
                    </div>
                </div>
            </div>

            <section id="about" class="about pb-0">
                <div class="container" data-aos="fade-up">
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
                                <div class="isi">Data yang dikumpulkan meliputi informasi tentang peserta acara, lokasi,
                                    waktu,
                                    biaya, dan
                                    lain-lain.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12">
                            <img src="{{ asset('img/eventbersama/content_4.png') }}" alt="Dashboard"
                                style="max-width: 100%">
                        </div>
                    </div>
                </div>
            </section>

            <div class="container" data-aos="fade-up">
                <div class="row content gy-4">
                    <div data-aos="fade-up">
                        <div class="row content mt-4 mb-4 pb-4 pt-4">
                            <div class="offset-sm-1 col-lg-10 col-sm-12 p-4">
                                <h2>{{ $data['isi_h2_fitur_integrasi'] }}</h2>
                                <h5 class="text-center">{{ $data['isi_h5_fitur_integrasi'] }}</h5>
                            </div>
                        </div>
                        <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                            <img src="{{ asset('img/eventbersama/content_5.png') }}" alt="Content Panji"
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

            <section id="etiket" class="text-center align-items-center bg-system-hardware-scanner p-0"
                data-aos="fade-up">
                <div class="container">
                    <div class="row content">
                        <div class="col-lg-6 col-sm-12 p-4 pb-0">
                            <img src="{{ asset('img/eventbersama/content_6.png') }}" alt="Content Seating"
                                style="max-width: 100%">
                        </div>
                        <div class="col-lg-6 col-sm-12 p-4 pb-0">
                            <h2 class="text-start p-0">{{ $data['isi_h2_hardware_scanner'] }}</h2>
                            <h5 class="text-start">{{ $data['isi_h5_hardware_scanner'] }}</h5>
                            <div class="wrapper-link">
                                <p>Tersedia juga untuk self service event di:</p>
                                <a href="" class="bg-none p-0"><img src="{{ asset('img/eventbersama/apple.png') }}"
                                        alt="{{ $data['link_applestore'] }}"></a>
                                <a href="{{ $data['link_playstore'] }}" class="bg-none p-0"><img
                                        src="{{ asset('img/eventbersama/playstore.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section><!-- End About Us Section -->

        @include('landing.contact')

    </main><!-- End #main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
@endsection
