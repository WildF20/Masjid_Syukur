@extends('layout.layout_front')

@section('title', 'Visi dan Misi')

@section('content')
 <!-- ********** Hero Area Start ********** -->
 <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg5.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
                        <h2 class="visi">Selayang Pandang</h2>
                        <h6 class="visi_isi">{!! $about->selayangPandang !!}</h6>
                        <h1></h1>
                        <h2 class="visi">Visi</h2>
                        <h6 class="visi_isi">{!! $about->visi !!}</h6>
                        <h1></h1>
                        <h2 class="visi">Misi</h2>
                        <h6 class="visi_isi">{!! $about->misi !!}</h6>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection