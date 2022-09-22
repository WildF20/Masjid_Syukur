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
            <form role="form" method='post' action='{{ url("admin/news/update/berita/$berita->idBerita") }}' enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name='judul'  class="form-control" placeholder="Masukkan Judul Berita" value="{{ $berita->judulBerita}}">
              </div>
              <div class="form-group">
                <label>Kategori Bidang</label>
                <select name='bidang' class="form-control">
                  <option value=2 @if($berita->berita_idBidang === 2) selected @endif>Ketua Takmir</option>
                  <option value=3 @if($berita->berita_idBidang === 3) selected @endif>Sekretaris</option>
                  <option value=4 @if($berita->berita_idBidang === 4) selected @endif>Bendahara</option>
                  <option value=6 @if($berita->berita_idBidang === 6) selected @endif>Bidang Dakwah</option>
                  <option value=7 @if($berita->berita_idBidang === 7) selected @endif>Bidang Sosial Kemasyarakatan</option>
                  <option value=8 @if($berita->berita_idBidang === 8) selected @endif>Bidang Sarana Prasarana</option>
                  <option value=9 @if($berita->berita_idBidang === 9) selected @endif>Bidang Pendidikan dan Keputrian</option>
                  <option value=10 @if($berita->berita_idBidang === 10) selected @endif>Bidang Remaja Masjid</option>
                  <option value=11 @if($berita->berita_idBidang === 11) selected @endif>Bidang Kebersihan, Keamanan dan Parkir</option>
                  <option value=12 @if($berita->berita_idBidang === 12) selected @endif>Bidang Publikasi dan Dokumentasi</option>
                </select>
              </div>
              <div class='form-group'>
                <div class="mb-3">
                  <label for="customFile">Deskripsi</label>
                  <textarea name='textdesc' class="form-control" rows="3" placeholder="Place some text here">{{ $berita->beritaDesc }}</textarea>
                </div>
              </div>
              <div class='form-group'>
                <div class="mb-3">
                  <textarea name='text' class="textarea" placeholder="Place some text here">{!! $berita->isiBerita !!}</textarea>
                </div>
              </div>
              <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-2">
              <input type="submit" class="btn btn-block btn-outline-success" value='Edit'>
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