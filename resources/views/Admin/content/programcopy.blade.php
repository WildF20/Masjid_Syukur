@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Program Unggulan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Program Unggulan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              Program Unggulan
            </h3>
          </div>
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              @foreach($bidang as $a)
              @if($a->idBidang > 5)
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-{{ $a->idBidang }}-tab" data-toggle="pill" href="#custom-content-above-{{ $a->idBidang }}" role="tab" aria-controls="custom-content-above-{{ $a->idBidang }}">{{ $a->idBidang }}</a>
              </li>
              @endif
              @endforeach
            </ul>
            <div class="tab-custom-content">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-block btn-outline-success" onclick="window.location.href='program/tambah'">Tambah Program</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
            <!-- separator -->

            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show" id="custom-content-above-6" role="tabpanel" aria-labelledby="custom-content-above-6-tab">
                <!-- Head Program -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>Bawah Ketua</p>
                  </div>
                </div>
                <!-- Separator -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-7" role="tabpanel" aria-labelledby="custom-content-above-7-tab">
                <!-- Head Program -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div>
                <!-- Separator -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div> 
              </div>
              <div class="tab-pane fade" id="custom-content-above-8" role="tabpanel" aria-labelledby="custom-content-above-8-tab">
                <!-- Head Program -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div>
                <!-- Separator -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div> 
              </div>
              <div class="tab-pane fade" id="custom-content-above-9" role="tabpanel" aria-labelledby="custom-content-above-9-tab">
                <!-- Head Program -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div>
                <!-- Separator -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Profil Masjid</h3>
                  </div>
                  <div class="card-body">
                    <p>lorem ipsum</p>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection