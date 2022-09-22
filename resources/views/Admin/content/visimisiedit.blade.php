@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Visi, Misi dan Selayang Padang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Visi dan Misi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                {{ $data }}
              </h3>
            </div>
            <!-- /.card-header -->
            <form role="form" method='post' action='{{ url("admin/visimisi/update/$data") }}'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="card-body pad">
              <div class="mb-3">
                <textarea name='text' class="textarea" placeholder="Place some text here">
                {{ $about -> $data }}
                </textarea>
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-block btn-outline-success" value='Update'>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-block btn-danger" onclick="window.location.href='{{ url("admin/visimisi") }}'">Cancel</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection