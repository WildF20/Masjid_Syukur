@extends('layout.layout_front')
@section('content')
<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg6.jpg);">
        </div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg7.jpg);">
        </div>
    </div>

    <!-- Hero Post Slide -->
    <div class="hero-post-area">
        <div class="container">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <h3>Masjid Syukur<br>Berkemajuan<br><br><br><br></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-post-slide">
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>1</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Dakwah')}}">Bidang Dakwah</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>2</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Sosma')}}">Bidang Sosial kemasyarakatan</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>3</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Sarpras')}}">Bidang Sarana dan Prasarana</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>4</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Pendidikan')}}">Bidang Pendidikan dan Keputrian</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>5</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Remas')}}">Bidang Remaja Masjid</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>6</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Keamanan')}}">Bidang Kebersihan, Keamanan dan Parkir</a>
                            </div>
                        </div>
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>7</p>
                            </div>
                            <div class="post-title">
                                <a href="{{route('program', 'Publikasi')}}">Bidang Publikasi & Dokumentasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">BERITA</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    @foreach($berita as $news)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="{{ url('/img/news/').'/'.$news->picBerita }}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="{{route('read', ['judul' => $news->slug_judul])}}" class="headline">
                                                <h5>{{ $news->judulBerita }}</h5>
                                            </a>
                                            <p>{{ $news->beritaDesc }}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{ $news->created_at->format('d M Y') }} at {{ $news->created_at->format('H:i') }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Selamat Datang!</h5>
                            <div class="widget-content">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------------------------------------------------------------------------------------->
    
@endsection