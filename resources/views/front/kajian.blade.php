@extends('layout.layout_front')

@section('title', 'Kajian')

@section('content')
<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <!-- ********** Main start********** -->
    <section class="kajian-area section-padding-100-kajian clear-fix">

        @foreach($kajian as $a)
        <div class="polaroid-kajian container-kajian">
            <img src="img\blog-img\b2.jpg" alt="gambar" class="image-kajian">
            <div class="overlay-kajian">
                <div class="text-kajian">{{ $a->deskripsiKajian }}</div>
            </div>
            <p>{{ $a->namaKajian }}<br> Setiap Hari {{ $a->hariKajian }}<br> Pukul : {{ $a->waktuKajian }}</p>
        </div>
        @endforeach
    </section>
@endsection