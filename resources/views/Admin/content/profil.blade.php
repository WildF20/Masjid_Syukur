@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil Masjid</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Profil Masjid</li>
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
            <h3 class="card-title">Profil Masjid</h3>
          </div>
          <div class="card-body">
            <form role="form">
              <div class="form-group">
                <label>Nama Masjid</label>
                <input type="text" class="form-control" placeholder="{{ $profil -> namaMasjid }}" disabled>
              </div>
              <div class="form-group">
                <label>Kontak</label>
                <input type="text" class="form-control" placeholder="{{ $profil -> kontak }}" disabled>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="{{ $profil -> email }}" disabled>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" placeholder="{{ $profil -> alamat }}" disabled></textarea>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Logo Masjid</h3>
                    </div>
                    <div class="card-body">
                      <a href="{{ asset('img/core-img/logo.png') }}" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                        <img src="{{ asset('img/core-img/logo.png') }}" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                      <span class="description">
                        <button type="button" class="btn btn-block btn-outline-primary" onclick="window.location.href='profil/edit/logo'">Edit Logo</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="dol-md-4"></div>
              </div>
              <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-block btn-outline-primary" onclick="window.location.href='profil/edit/profil'">Edit</button>
                </div>
              </div>




            </form>
          </div>
        </div>
      </div>
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection