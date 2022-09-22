@extends('layout.layout_front')
@section('title', 'Donatur')


@section('content')
<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <section class="contact-area section-padding-100">

        <div class="container">
            <h2>Informasi Donatur</h2>
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="easyui-accordion" style="width:1200px;height:500px;">
                    <div title="Info Donatur" data-options="iconCls:'icon-help'" style="overflow:auto;padding:10px;">
                        <p style="color:rgb(16, 66, 99); font-size: 35px; font-weight: 700px"><b>&nbsp;Informasi Donatur</b></p>
                        <p style="color: black;font-size: 16px">Donatur dapat dikirim melalui beberapa cara : </p>
                        <p style="color: black;font-size: 16px"><i class="fas fa-mosque" style="color: black;letter-spacing: 3px;"></i> Kirim langsung ke Masjid Syukur Ampel
                            <p style="color: black;font-size: 16px">&nbsp; &nbsp;&nbsp;&nbsp;Dusun 2, Kaligentong, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352</p>
                            <a href="https://goo.gl/maps/9BB5sSeuqbZJX3D56"><button class="button-donasi btn-lokasi" style="vertical-align:middle"><span>Lihat Lokasi</span></button></a><br>
                        </p>
                        <p style="color: black;font-size: 16px"><i class="far fa-credit-card" style="color: black;letter-spacing: 3px;"></i> Nomor Rekening : <br>
                            <h5 style="color:rgb(16, 66, 99)">&nbsp; &nbsp;&nbsp;2215-XXXX-XXX-XX</h5>
                        </p>
                        <p style="color: black;font-size: 16px"><i class="fas fa-phone-square" style="color: black;letter-spacing: 3px;"></i> Konfirmasi donasi : <br>
                            <p style="color: black;font-size: 16px">&nbsp; &nbsp;&nbsp;konfirmasi dengan mengirim bukti transfer ke nomor dibawah ini </p>
                            <h5 style="color:rgb(16, 66, 99)">&nbsp; &nbsp;&nbsp;0823-xxx-xxxx</h5>
                        </p>

                    </div>
                    <div title="Penyaluran Donasi" data-options="iconCls:'icon-ok'" style="padding:10px;">
                        <p style="color:rgb(16, 66, 99); font-size: 35px; font-weight: 700px"><b>&nbsp;Penyaluran Donasi</b></p>
                        <p style="color: black;font-size: 16px">Donasi yang diterima oleh Masjid Syukur Ampel akan di salurkan pada pihak-pihak yang membutuhkan, diantaranya : </p>
                        <a class="btn-donatur" href="{{route('program')}}">
                            <button class="button-donasi" style="vertical-align:middle"><span>Panti Asuhan</span></button><br>
                            <button class="button-donasi" style="vertical-align:middle"><span>Duafa</span></button><br>
                            <button class="button-donasi" style="vertical-align:middle"><span>Korban Bencana</span></button>
                        </a>
                    </div>

                    <div title="TreeMenu" data-options="iconCls:'icon-search'" style="padding:10px 0;">

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection