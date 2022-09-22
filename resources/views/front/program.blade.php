@extends('layout.layout_front')

@section('title', 'Program Unggulan')

@push('header')
<style>
        * {
            box-sizing: border-box
        }
        
        body {
            font-family: "Lato", sans-serif;
        }
        /* Style the tab */
        
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 300px;
        }
        /* Style the buttons inside the tab */
        
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }
        /* Change background color of buttons on hover */
        
        .tab button:hover {
            background-color: #ddd;
        }
        /* Create an active/current "tab button" class */
        
        .tab button.active {
            background-color: #ccc;
        }
        /* Style the tab content */
        
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 300px;
        }
        
        .clear-fix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
@endpush

@section('content')
<!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url({{ asset('img/blog-img/bg5.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <h3>Masjid Syukur<br>Berkemajuan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100 clear-fix">
        <div class="container">
            <div class="">
                <!-- ============= Post Content Area ============= -->
                <h2>Program Unggulan {{ $bidang->namaBidang }}</h2>
                <p>Berikut adalah program unggulan {{ $bidang->namaBidang }} yang terdapat pada masjid syukur ampel</p>
                @foreach($program as $a)
                @if($a->program_idBidang === $bidang->idBidang)
                <div class="polaroid-kajian container-kajian">
                    <img src="{{ asset('img\blog-img\b2.jpg') }}" alt="gambar" class="image-kajian">
                    <div class="overlay-kajian">
                        <div class="text-kajian">{{ $a->namaProgram }}</div>
                    </div>
                    <p>{{ $a->namaProgram }}<br>{{ $a->deskripsiProgram }}</p>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('footer')
<script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endpush