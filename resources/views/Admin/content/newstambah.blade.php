@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Berita</h1>
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
            <form role="form" method='post' action='{{ url("admin/news/add") }}' enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name='judul'  class="form-control" placeholder="Masukkan Judul Berita" value="">
              </div>
              <div class="form-group">
                <label>Kategori Bidang</label>
                <select name='bidang' class="form-control">
                  <option value=2>Ketua Takmir</option>
                  <option value=3>Sekretaris</option>
                  <option value=4>Bendahara</option>
                  <option value=6>Bidang Dakwah</option>
                  <option value=7>Bidang Sosial Kemasyarakatan</option>
                  <option value=8>Bidang Sarana Prasarana</option>
                  <option value=9>Bidang Pendidikan dan Keputrian</option>
                  <option value=10>Bidang Remaja Masjid</option>
                  <option value=11>Bidang Kebersihan, Keamanan dan Parkir</option>
                  <option value=12>Bidang Publikasi dan Dokumentasi</option>
                </select>
              </div>
              <div class='form-group'>
                <label for="customFile">Deskripsi</label>
                <div class="mb-3">
                  <textarea name='textdesc' class="form-control" rows="3" placeholder="Place some text here"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="customFile">File Gambar</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name='foto' id='foto' value="{{ old('Foto') }}" accept='image/*'>
                  <label class="custom-file-label" for="customFile">Pilih Foto</label>
                </div>
              </div>
              <div class='form-group'>
                <div class="mb-3">
                  <textarea name='text' class="textarea" placeholder="Place some text here"></textarea>
                </div>
              </div>
              <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-2">
              <input type="submit" class="btn btn-block btn-outline-success" value='Tambah'>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-block btn-outline-danger" onclick="window.location.href='{{ url("admin/news") }}'">Cancel</button>
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