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
              Tambah Program
            </h3>
          </div>
          <div class="card-body">
            <form role="form" method='post' action='{{ url("admin/program/add") }}'>
              {{ csrf_field() }}
              <div class="form-group">
                <label>Nama Program</label>
                <input name='nama' type="text" class="form-control" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label>Kategori Bidang</label>
                <select name='bidang' class="form-control">
                  <option value=6>Bidang Dakwah</option>
                  <option value=7>Bidang Sosial Kemasyarakatan</option>
                  <option value=8>Bidang Sarana Prasarana</option>
                  <option value=9>Bidang Pendidikan dan Keputrian</option>
                  <option value=10>Bidang Remaja Masjid</option>
                  <option value=11>Bidang Kebersihan, Keamanan dan Parkir</option>
                  <option value=12>Bidang Publikasi dan Dokumentasi</option>
                </select>
              </div>
              <div class="form-group">
                <label>Deskripsi Program</label>
                <textarea name='deskripsi' class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                  <input type='submit' class="btn btn-block btn-outline-success" value='Tambah'></button>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-block btn-outline-danger" onclick="window.location.href='{{ url("admin/program") }}'">Cancel</button>
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