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
            <form role="form" method='post' action='{{ url("admin/profil/update/profil") }}'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="form-group">
                <label>Nama Masjid</label>
                <input type="text" name='nama'  class="form-control" placeholder="Masukkan Nama Masjid" value="{{ $profil -> namaMasjid }}">
              </div>
              <div class="form-group">
                <label>Kontak</label>
                <input type="text" name='kontak' class="form-control" placeholder="Masukkan Kontak" value="{{ $profil -> kontak }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name='email' class="form-control" placeholder="Masukkan Email" value="{{ $profil -> email }}">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name='alamat' class="form-control" rows="3" placeholder="Masukkan Alamat">{{ $profil -> alamat }}</textarea>
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-block btn-outline-success" value='Update'>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-block btn-danger" onclick="window.location.href='{{ url("admin/profil") }}'">Cancel</button>
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