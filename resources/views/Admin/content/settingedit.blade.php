@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengaturan Website</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan</li>
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
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Pengaturan Website</h3>
              </div>
              <div class="card-body">
                <form role="form" method='post' action='{{ url("admin/setting/update") }}'>
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div>
                    <div class="form-group">
                      <label>Website Title</label>
                      <input type="text" name='titleWeb' class="form-control" placeholder="Masukkan Judul Web" value=" {{ $setting->titleWeb }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="customFile">Icon</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="customFile">Favicon</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                      <input type="submit" class="btn btn-block btn-outline-success" value='Update'>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-block btn-danger" onclick="window.location.href='{{ url("admin/setting") }}'">Cancel</button>
                    </div>
                  </div>
                </form>
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