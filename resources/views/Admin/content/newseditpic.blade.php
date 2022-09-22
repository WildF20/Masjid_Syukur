@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="card-body">
            <form role="form" method='post' action='{{ url("admin/news/update/gambar/$berita->idBerita") }}' enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label for="customFile">Custom File</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name='foto' id='foto' value="{{ old('Foto') }}" accept='image/*'>
                  <label class="custom-file-label" for="customFile">Pilih Foto</label>
                </div>
              </div>
              <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-2">
              <input type="submit" class="btn btn-block btn-outline-success toastrDefaultSuccess" value='Update'>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-block btn-outline-danger" onclick="window.history.go(-1)">Cancel</button>
              </div>
            </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection