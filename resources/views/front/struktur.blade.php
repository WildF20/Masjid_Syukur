@extends('layout.layout_front')

@section('title', 'Struktur Organisasi')

@section('content')
 <!-- ********** Hero Area Start ********** -->
 <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg5.jpg);"></div>
    <!-- ********** Hero Area End ********** -->
@push('header')
<style>
        html {
            scroll-behavior: smooth;
        }
        
        .header-organisasi {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
        }
        
        .content {
            padding: 16px;
            top: 100px;
            padding-bottom: 15px;
        }
        
        .sticky2 {
            position: fixed;
            top: 50px;
            width: 100%;
        }
        
        .sticky2+.content {
            padding-top: 102px;
        }
        /* section untuk halaman tiap bidang */
        
        #section0 {
            
            background-color: white;
        }
        
        #section1 {
            
            padding-top: 100px;
            background-color: white;
        }
        
        #section2 {
           
            background-color: white;
            padding-top: 100px;
        }
        
        #section3 {
            
            padding-top: 100px;
            background-color: white;
        }
        
        #section4 {
        
            background-color: white;
            padding-top: 100px;
        }
        
        #section5 {
            
            background-color: white;
            padding-top: 100px;
        }
        
        #section6 {
        
            background-color: white;
            padding-top: 100px;
        }
        
        ul,
        #myUL {
            list-style-type: none;
        }
        
        #myUL {
            margin: 0;
            padding: 0;
        }
        
        .caret {
            cursor: pointer;
            -webkit-user-select: none;
            /* Safari 3.1+ */
            -moz-user-select: none;
            /* Firefox 2+ */
            -ms-user-select: none;
            /* IE 10+ */
            user-select: none;
        }
        
        .caret::before {
            content: "\25B6";
            color: black;
            display: inline-block;
            margin-right: 6px;
        }
        
        .caret-down::before {
            -ms-transform: rotate(90deg);
            /* IE 9 */
            -webkit-transform: rotate(90deg);
            /* Safari */
            transform: rotate(90deg);
        }
        
        .nested {
            display: none;
        }
        
        .active {
            display: block;
        }
    </style>

    <!--Style untuk table-->
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 80%;
            border: 1px solid #ddd;
        }
        
        th,
        td {
            text-align: left;
            padding: 16px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
@endpush

    <!-- conten-->
    <div class="header-organisasi" id="myHeader">
        <ul id="myUL">
            <li><span class="caret">Struktur Organisasi</span>
                <ul class="nested">
                    @foreach($bidang as $a)
                    <li><a href="#section{{ $a->idBidang }}">{{ $a->namaBidang }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
        <div class="main" id="section0">
            <h2>Masjid Syukur Ampel</h2>
            <p>
                <center>memiliki struktur organisasi didalamnya yang bermanfaat untuk mengatur dan mengelola masjid tersebut.</center>
            </p>
        </div>
        @foreach($bidang as $a)
        <div class="main" id="section{{ $a->idBidang }}">
            <h2>{{ $a->namaBidang }}</h2>
            <table>
                <tr>
                    <th>Nama Anggota</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                </tr>
                @foreach($struktur as $b)
                @if($b->anggota_idBidang === $a->idBidang)
                <tr>
                    <td>{{ $b->namaAnggota }}</td>
                    @foreach($rolestruktur as $c)
                    @if($c->idRoleStruktur === $b->anggota_idRoleStruktur)
                    <td>{{ $c->namaRole }}</td>
                    @endif
                    @endforeach
                    <td>{{ $b->ket }}
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        
        @endforeach
    </div>
    <!-- End Conten-->
@endsection

@push('footer')
<script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky2");
            } else {
                header.classList.remove("sticky2");
            }
        }

        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }
    </script>
@endpush