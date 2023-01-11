@extends('layouts.frontend.master-exclude-header')

@section('title')
    Info Wisata
@endsection

@section('content')
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Kampoeng Nopia Mino</h3>
            <h5>Sub Sektor Ekonomi Kreatif Kuliner</h5>
            <p></p>
        </div>
        <img src="{{ asset('assets/nopia.jpeg') }}" class="col-md-2 float-md-end mb-3 ms-md-2" alt="...">

        <p>
            Kampoeng Nopia & Mino.. Yg ber berada di desa Pekunden, Banyumas. Di tmpat ini ada makanan khas Banyumas
            bernama Nopia & Mino dengan bervarian rasa loh.
        </p>
        <p>Penasaran dan pengin tau cara pembuatannya..?</p>
        <p>Yuuuuuk ......langsung saja datang Ke Desa Wisata Pekunden, kec. Banyumas.</p>
        <p>MANGAN MINO SEPUASE.</p>

    </div>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Oemah Gamelan</h3>
            <h5>Sub Sektor Ekonomi Kreatif Musik dan Seni Pertunjukan</h5>
            <p></p>
        </div>
        <img src="{{ asset('assets/gamelan.jpeg') }}" class="col-md-2 float-md-end mb-3 ms-md-2" alt="...">

        <p>
            Wisata Edukasi oemah gamelan
            Desa Pekunden Kecamatan Banyumas
        </p>
        <p>Terbentuk setelah beberapa kali terbentur karena pandemi covid 19, akhirnya Salah satu Destinasi Wisata
            Edukasi di Desa Pekunden terwujud dengan kegiatan proses produksi gamelan berbahan besi juga Perunggu.
            Wisatawan juga akan mendapatkan edukasi tentang cara memainkan instrumen Gamelan yang akan di pandu oled
            Pokdarwis Wisanggeni Desa Pekunden.</p>

    </div>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Kebun Buah Naga</h3>
            <h5>Pendukung Sub Sektor Ekonomi Kreatif Kuliner</h5>
            <p></p>
        </div>
        <img src="{{ asset('assets/buah_naga.jpeg') }}" class="col-md-2 float-md-end mb-3 ms-md-2" alt="...">


        <p>
            Kebun Buah Naga yang berada di Desa Wisata Pekunden. Kita di sini bisa blajar cara menanam, dan
            memetiknya.
        </p>

    </div>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Oemah Batik</h3>
            <h5>Sub Sektor Ekonomi Kreatif Kriya</h5>
            <p></p>
        </div>
        <img src="{{ asset('assets/batik.png') }}" class="col-md-2 float-md-end mb-3 ms-md-2" height="250" alt="...">
        <p>
            Oemah Batik adalah Sebuah Destinasi Desa Wisata di Desa Pekunden yang didalamnya para wisatawan akan
            mendapatkan ilmu pengetahuan tentang Dunia Batik Khas Banyumas kota lama.Wisatawan juga akan belajar
            langsung Teknik dasar membuat Batik Tulis, batik Cap dan Ecoprin berupa Tata Busana yang pembuatannya
            masih menggunakan bahan-bahan alami berupa dedaunan dll.
        </p>

    </div>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Oemah Manggleng</h3>
            <h5>Sub Sektor Ekonomi Kreatif Kuliner</h5>
            <p></p>
        </div>
        <img src="{{ asset('assets/manggleng.jpeg') }}" class="col-md-2 float-md-end mb-3 ms-md-2" alt="...">


        <p>
            Manggleng merupakan camilan ringan yang terbuat dari bahan dasar ubi tanah atau singkong yang dipotong
            tipis-tipis kemudian digoreng kering hingga seperti krupuk, ada yang menyukai cukup digoreng biasa saja
            namun ada juga yang menyukai manggleng dengan bumbu bestak manis pedas.
        </p>

    </div>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Kampung Garmen</h3>
            <h5>Sub Sektor Ekonomi Kreatif Fasion</h5>
            <p></p>
        </div>
        <img src="{{ asset('assets/garmen.png') }}" class="col-md-2 float-md-end mb-3 ms-md-2" alt="...">


        <p>
            Kampung Garmen adalah sebuah komunitas dengan kegiatan industri garmen atau produksi pakaian. Kegiatan
            industri garmen di Kampung Garmen telah menjadi salah satu sumber penghasilan utama bagi warga setempat,
            dnegan banyaknya pekerja yang berkerja tersebut. Selain itu, Kampung Garmen juga terkenal dengan
            produk-produknya yang berkualitas dan bervariasi, yang menjadi pilihan banyak konsumen jika berkunjung
            ke Desa Pekunden.
        </p>

    </div>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Kuliner Khas Desa Wisata Kreatif Pekunden</h3>

            <div class="row justify-content" id="list-product">
                <!-- 1 -->
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/teh-bunga-telang_169.jpeg') }}" height="190" width="150"
                            alt="">
                    </div>
                    <h4>
                        Teh Telangsa
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/gada.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Gada Mendem
                    </h4>
                </div>

            </div>
        </div>

    </div>
    <p></p>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Atraksi Seni dan Budaya </h3>

            <div class="row justify-content" id="list-product">
                <!-- 1 -->
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/tari.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Tari “PEKUNCARA”
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/obor.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Atraksi Obor
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/ziarah.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Kirab Ziarah
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/grebeg.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Grebeg Suran
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/takiran.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Takiran
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/hadroh.png') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Hadroh
                    </h4>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/wayang.jpeg') }}" height="190" width="150" alt="">
                    </div>
                    <h4>
                        Wayang Kulit
                    </h4>
                </div>
            </div>
        </div>

    </div>
    <p></p>
    <div class="clearfix">
        <div class="clearfix entry-cat-header">
            <h3 class="ts-title float-left">| Home Stay & Toilet </h3>

            <div class="row justify-content" id="list-product">
                <!-- 1 -->
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/kamar1.png') }}" height="190" width="150" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/kamar2.png') }}" height="190" width="150" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-10">

                    <div class="image">

                        <img src="{{ asset('assets/toilet.png') }}" height="190" width="150" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
