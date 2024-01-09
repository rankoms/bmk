<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('landing.index');
    }

    public function percetakan()
    {
        $lainnya = [
            ['image' => 'lainnya_1.png', 'name' => 'Brosur'],
            ['image' => 'lainnya_2.png', 'name' => 'Mug'],
            ['image' => 'lainnya_3.png', 'name' => 'Kartu Nama'],
            ['image' => 'lainnya_4.png', 'name' => 'T-Shirt'],
            ['image' => 'lainnya_5.png', 'name' => 'Majalah'],
            ['image' => 'lainnya_6.png', 'name' => 'Buku'],
            ['image' => 'lainnya_7.png', 'name' => 'Kalender'],
            ['image' => 'lainnya_8.png', 'name' => 'Sticker'],
            ['image' => 'lainnya_9.png', 'name' => 'Dan Lainya'],
        ];
        return view('landing.percetakan', compact('lainnya'));
    }

    public function sistem()
    {
        $data = [
            'header_h2' => 'Solusi onground event',
            'header_h5' => 'BMK menyediakan layanan manajemen event untuk berbagai acara seperti konser, pertandingan olahraga, festival, pameran, dan lain-lain. Kami telah bekerjasama dengan berbagai promotor acara dan tempat penyelenggaraan acara',

            'isi_h2_sistem' => 'Sistem Redemption',
            'isi_h5_sistem' => 'Sistem redemption tiket BMK dapat memudahkan pengguna untuk menukarkan tiket dan dapat melakukannya melalui aplikasi atau website. Selain itu, sistem ini juga dapat membantu meminimalisir antrian dan kerumunan di lokasi acara.',

            'isi_h2_mobile' => 'Mobile Scanner',
            'isi_h5_mobile' => 'Mobile scanner BMK dapat meningkatkan efisiensi dan kecepatan proses pemeriksaan tiket karena pengguna dapat memindai tiket langsung dari smartphone atau perangkat seluler dan dapat Mobile scanner BMK mensupport Whitelable sehingga dapat di custom.
            Hal ini dapat mengurangi antrian dan mempercepat waktu pemeriksaan tiket.'

        ];
        $lainnya = [
            ['image' => 'lainnya_1.png', 'name' => 'Brosur'],
            ['image' => 'lainnya_2.png', 'name' => 'Mug'],
            ['image' => 'lainnya_3.png', 'name' => 'Kartu Nama'],
            ['image' => 'lainnya_4.png', 'name' => 'T-Shirt'],
            ['image' => 'lainnya_5.png', 'name' => 'Majalah'],
            ['image' => 'lainnya_6.png', 'name' => 'Buku'],
            ['image' => 'lainnya_7.png', 'name' => 'Kalender'],
            ['image' => 'lainnya_8.png', 'name' => 'Sticker'],
            ['image' => 'lainnya_9.png', 'name' => 'Dan Lainya'],
        ];
        return view('landing.sistem', compact('lainnya', 'data'));
    }
    public function website()
    {
        $lainnya = [
            ['image' => 'lainnya_1.png', 'name' => 'Brosur'],
            ['image' => 'lainnya_2.png', 'name' => 'Mug'],
            ['image' => 'lainnya_3.png', 'name' => 'Kartu Nama'],
            ['image' => 'lainnya_4.png', 'name' => 'T-Shirt'],
            ['image' => 'lainnya_5.png', 'name' => 'Majalah'],
            ['image' => 'lainnya_6.png', 'name' => 'Buku'],
            ['image' => 'lainnya_7.png', 'name' => 'Kalender'],
            ['image' => 'lainnya_8.png', 'name' => 'Sticker'],
            ['image' => 'lainnya_9.png', 'name' => 'Dan Lainya'],
        ];
        return view('landing.website', compact('lainnya'));
    }

    public function furniture()
    {

        $furniture = [
            ['image' => 'furniture_1.png', 'name' => 'Kitchen Set'],
            ['image' => 'furniture_2.png', 'name' => 'Booth Event'],
            ['image' => 'furniture_3.png', 'name' => 'Meja Event'],
            ['image' => 'furniture_4.png', 'name' => 'Totem Event'],
            ['image' => 'furniture_5.png', 'name' => 'Display Totem'],
            ['image' => 'furniture_6.png', 'name' => 'Dan Lainya'],
        ];
        return view('landing.furniture', compact('furniture'));
    }

    public function tiketbersama()
    {
        $data = [
            'header_h2' => '',
            'header_h5' => 'Tiket Bersama adalah plaftorm untuk mudah mencari, membeli, dan mengelola tiket untuk berbagai acara dan aktivitas dengan teknologi terbaru. Platform ini dirancang untuk memudahkan pengguna dalam menemukan dan mereservasi tiket untuk konser, pertunjukan, acara olahraga, konferensi, atau aktivitas lainnya.',

            'isi_h2_sistem' => 'White Label',
            'isi_h5_sistem' => 'Tim kami akan bekerja sama dengan Anda untuk membuat desain website yang sesuai dengan merek bisnis Anda dan menggambarkan nilai-nilai yang ingin disampaikan. Kami akan memastikan bahwa website Anda terlihat profesional, menarik, dan mudah dinavigasi.',

            'isi_h2_dana' => 'Penarikan Dana Cepat',
            'isi_h5_dana' => 'Kami bangga memberikan layanan penarikan dana yang cepat dan kapanpun kepada para pelanggan kami. Dapatk an uang Anda dalam sekejap dengan proses penarikan yang lancar dan efisien!',


            'isi_h2_etiket' => 'Kustom E-Tiket',
            'isi_h5_etiket' => 'E-tiket terbaru dari TiketBersama dapat disesuaikan sesuai kebutuhan Anda. Pilih opsi kustomisasi tiket yang tepat dan buat pengalaman Anda menjadi lebih personal.',


            'isi_h2_fitur_etiket' => 'Fitur E-Tiket',
            'isi_h5_fitur_etiket' => 'E-tiket terbaru dari TiketBersama dapat disesuaikan sesuai kebutuhan Anda. Pilih opsi kustomisasi tiket yang tepat dan buat pengalaman Anda menjadi lebih personal.',

            'isi_h2_seating' => 'Fitur Seating',
            'isi_h5_seating' => 'Nikmati kemudahan sistem e-tiket terkini kami yang di distribusikan langsung ke email atau WhatsApp Anda. Pengalaman beli tiket lebih cepat, lebih modern, dan lebih praktis.',


        ];
        $lainnya = [
            ['image' => 'lainnya_1.png', 'name' => 'Brosur'],
            ['image' => 'lainnya_2.png', 'name' => 'Mug'],
            ['image' => 'lainnya_3.png', 'name' => 'Kartu Nama'],
            ['image' => 'lainnya_4.png', 'name' => 'T-Shirt'],
            ['image' => 'lainnya_5.png', 'name' => 'Majalah'],
            ['image' => 'lainnya_6.png', 'name' => 'Buku'],
            ['image' => 'lainnya_7.png', 'name' => 'Kalender'],
            ['image' => 'lainnya_8.png', 'name' => 'Sticker'],
            ['image' => 'lainnya_9.png', 'name' => 'Dan Lainya'],
        ];
        return view('landing.tiketbersama', compact('lainnya', 'data'));
    }
}
