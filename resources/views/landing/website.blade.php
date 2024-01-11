@extends('layouts.app_landing')

@section('content')
    @include('landing.header')


    <section id="header-image" class="text-center align-items-center">
        <div class="wrapper-text">
            <h2>Buat website berkualitas</h2>
            <h5>Buat website yang menarik dan berkualitas tinggi untuk tim, proyek, atau event.
                Dapatkan keuntungan maksimal pembuatan website sesuai dengan kebutuhan bisnis Anda</h5>
        </div>

    </section>

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="website" class="about website">
            <div class="container" data-aos="fade-up">
                <div class="row content gy-4">
                    <div class="col-lg-12 p-4">
                        <h2>Mengapa pilih Jasa Pembuatan Website di BMK</h2>
                        <h5 class="text-center">Bangun keberadaan digital bisnis Anda dengan website profesional kustom!
                            Dapatkan tampilan
                            yang menarik dan fungsionalitas yang sempurna untuk meningkatkan online presence bisnis Anda.
                        </h5>
                    </div>
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
                    <div class="offset-lg-2 col-lg-8 col-sm-12 text-center">
                        <img src="{{ asset('img/website/website_1.png') }}" alt="Website 1 BMK" style="max-width: 100%">
                    </div>
                </div>
                <div class="row content">
                    <div class="offset-lg-2 col-lg-8 col-sm-12 p-4">
                        <h2>Desain Kustom yang Menarik &
                            Fungsionalitas yang Sempurna</h2>
                        <h5 class="text-center">Tim kami akan bekerja sama dengan Anda untuk membuat desain website yang
                            sesuai dengan
                            merek bisnis Anda dan menggambarkan nilai-nilai yang ingin disampaikan. Kami akan memastikan
                            bahwa website Anda
                            terlihat profesional, menarik, dan mudah dinavigasi.</h5>
                    </div>
                    <div class="col-lg-8 offset-lg-2 col-sm-12 text-center">
                        <img src="{{ asset('img/website/website_2.png') }}" alt="Website 1 BMK" style="max-width: 100%">
                    </div>
                    <h5 class="offset-lg-2 col-lg-8 col-sm-12 text-center pt-4">Kami menawarkan harga yang kompetitif untuk
                        solusi
                        website
                        yang kami tawarkan. Kami percaya
                        bahwa bisnis kecil dan menengah juga membutuhkan website yang profesional untuk bersaing di pasar
                        digital</h5>
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
