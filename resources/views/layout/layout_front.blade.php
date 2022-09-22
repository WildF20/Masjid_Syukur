<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--css easyui-->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/easyui/themes/default/easyui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/easyui/themes/icon.css')}}">
    <script type="text/javascript" src="{{asset('plugins/easyui/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/easyui/jquery.easyui.min.js')}}"></script>
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Title  -->
    <title>@yield('title') Masjid Syukur</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    @stack('header')


</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <!-- <img src="{{ asset('img/core-img/logo.png') }}" alt="Logo"> -->
                        <a class="judul" href="{{route('home')}}"><img src="{{ asset('img/core-img/logo2.png') }}" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Beranda <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('visi')}}">Visi Misi</a>
                                        <a class="dropdown-item" href="{{route('organisasi')}}">Struktur Organisasi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('kajian')}}">Kajian</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program<br>Unggulan</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('program', 'Dakwah') }}">Dakwah</a>
                                        <a class="dropdown-item" href="{{ route('program', 'Sosma') }}">Sosial Masyarakat</a>
                                        <a class="dropdown-item" href="{{ route('program', 'Sarpras') }}">Sarana Prasarana</a>
                                        <a class="dropdown-item" href="{{ route('program', 'Pendidikan') }}">Pendidikan dan Keputrian</a>
                                        <a class="dropdown-item" href="{{ route('program', 'Remas') }}">Remaja Masjid</a>
                                        <a class="dropdown-item" href="{{ route('program', 'Keamanan') }}">Kebersihan dan Keamanan Parkir</a>
                                        <a class="dropdown-item" href="{{ route('program', 'Publikasi') }}">Publikasi dan Dokumentasi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    @yield('content')

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a class="judul" href="{{ route('home') }}"><img src="{{ asset('img/core-img/logo2.png') }}" alt="Logo"></a>
                        <div class='container'>
                            <p><a href="https://goo.gl/maps/9BB5sSeuqbZJX3D56"><i class="fas fa-map-marker-alt" style='color:white'></i></a>&nbsp;&nbsp; {{ $profil->alamat }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5 id='contact'>Contact Us</h5>

                        <p><i class="fa fa-envelope" style='color:white'></i>&nbsp;&nbsp; {{ $profil->email }}</p>
                        <p><i class="fab fa-instagram" style='color:white'></i>&nbsp;&nbsp; @masjidsyukur.ampel</p>
                        <p><i class="fab fa-whatsapp" style='color:white'></i>&nbsp;&nbsp; {{ $profil->kontak }}</p>

                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>

    @stack('footer')
</body>

</html>