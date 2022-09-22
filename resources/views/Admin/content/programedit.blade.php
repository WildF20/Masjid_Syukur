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
              Edit Program
            </h3>
          </div>
          <div class="card-body">
            <form role="form" method='post' action='{{ url("admin/program/update/$program->idProgram") }}'>
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label>Nama Program</label>
                <input name='nama' type="text" class="form-control" placeholder="Masukkan Nama Program" value='{{ $program->namaProgram }}'>
              </div>
              <div class="form-group">
                <label>Kategori Bidang</label>
                <select name='bidang' class="form-control">
                  <option value=6 @if( $program->program_idBidang === 6 ) selected @endif>Bidang Dakwah</option>
                  <option value=7 @if( $program->program_idBidang === 7 ) selected @endif>Bidang Sosial Kemasyarakatan</option>
                  <option value=8 @if( $program->program_idBidang === 8 ) selected @endif>Bidang Sarana Prasarana</option>
                  <option value=9 @if( $program->program_idBidang === 9 ) selected @endif>Bidang Pendidikan dan Keputrian</option>
                  <option value=10 @if( $program->program_idBidang === 10 ) selected @endif>Bidang Remaja Masjid</option>
                  <option value=11 @if( $program->program_idBidang === 11 ) selected @endif>Bidang Kebersihan, Keamanan dan Parkir</option>
                  <option value=12 @if( $program->program_idBidang === 12 ) selected @endif>Bidang Publikasi dan Dokumentasi</option>
                </select>
              </div>
              <div class="form-group">
                <label>Deskripsi Program</label>
                <textarea name='deskripsi' class="form-control" rows="3" placeholder="Masukkan Deskripsi Program">{{ $program->deskripsiProgram }}</textarea>
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                  <input type='submit' class="btn btn-block btn-outline-success" value='Update'></button>
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