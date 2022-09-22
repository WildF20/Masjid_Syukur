@extends('layout.layout_front')

@section('title', 'berita')

@section('content')
 <!-- ********** Hero Area Start ********** -->
 <div class="hero-area height-400 bg-img background-overlay" style="background-image: url({{asset('img/blog-img/bg5.jpg') }});"></div>
    <!-- ********** Hero Area End ********** -->
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{ $berita->created_at->format('d M Y') }} at {{ $berita->created_at->format('H:i') }}</a></p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class='post-meta'>
                                <h1>{{ $berita->judulBerita }}</h1>
                            </div>
                            <div class='post-meta'>  
                                <img class="img-fluid" src="{{ url('/img/news/').'/'.$berita->picBerita }}" alt="Photo">
                                <h6></h6>
                                <p>{{ $berita->beritaDesc }}</p>
                            </div>
                            <div class='post-meta'>
                                {!! $berita->isiBerita !!}
                            </div>
                                                      <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{ $berita->created_at->format('d M Y') }} at {{ $berita->created_at->format('H:i') }}</a></p>
                            </div>
                            <!-- kembali ke home -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="load-more-btn ">
                                        <a href="{{route('home')}}" class="btn world-btn">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Masjid<br>Syukur Ampel</h5>
                            <div class="widget-content">
                                <p>{!! $about->selayangPandang !!}</p>
                            </div>
                        </div>
                        <!-- <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div> -->
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Lokasi Masjid</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3956.1564629561212!2d110.5378394!3d-7.4479358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a701748c4cd39%3A0x4a0f449dcb7f27!2sMasjid%20Syukur!5e0!3m2!1sen!2sid!4v1576750524447!5m2!1sen!2sid" width="320" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                                    </div>
                                    <!-- Post Content -->
                                    <!-- <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
@endsection