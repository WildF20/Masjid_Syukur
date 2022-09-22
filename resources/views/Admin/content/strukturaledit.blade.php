@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Struktural Takmir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Struktural Takmir</li>
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
            <form role="form" method='post' action='{{ url("admin/struktural/update/$struktur->idAnggota") }}'>
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name='nama'  class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ $struktur->namaAnggota }}">
              </div>
              <div class="form-group">
                <label>Kategori Bidang</label>
                <select name='bidang' class="form-control">
                  <option value=2 @if( $struktur->anggota_idBidang === 2 ) selected @endif>Ketua Takmir</option>
                  <option value=3 @if( $struktur->anggota_idBidang === 3 ) selected @endif>Sekretaris</option>
                  <option value=4 @if( $struktur->anggota_idBidang === 4 ) selected @endif>Bendahara</option>
                  <option value=1 @if( $struktur->anggota_idBidang === 1 ) selected @endif>Pembina</option>
                  <option value=5 @if( $struktur->anggota_idBidang === 5 ) selected @endif>Penasehat</option>
                  <option value=6 @if( $struktur->anggota_idBidang === 6 ) selected @endif>Bidang Dakwah</option>
                  <option value=7 @if( $struktur->anggota_idBidang === 7 ) selected @endif>Bidang Sosial Kemasyarakatan</option>
                  <option value=8 @if( $struktur->anggota_idBidang === 8 ) selected @endif>Bidang Sarana Prasarana</option>
                  <option value=9 @if( $struktur->anggota_idBidang === 9 ) selected @endif>Bidang Pendidikan dan Keputrian</option>
                  <option value=10 @if( $struktur->anggota_idBidang === 10 ) selected @endif>Bidang Remaja Masjid</option>
                  <option value=11 @if( $struktur->anggota_idBidang === 11 ) selected @endif>Bidang Kebersihan, Keamanan dan Parkir</option>
                  <option value=12 @if( $struktur->anggota_idBidang === 12 ) selected @endif>Bidang Publikasi dan Dokumentasi</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <select name='jabatan' class="form-control">
                  <option value=1 @if( $struktur->anggota_idRoleStruktur === 1 ) selected @endif>Ketua</option>
                  <option value=2 @if( $struktur->anggota_idRoleStruktur === 2 ) selected @endif>Wakil</option>
                  <option value=3 @if( $struktur->anggota_idRoleStruktur === 3 ) selected @endif>Sekretaris</option>
                  <option value=4 @if( $struktur->anggota_idRoleStruktur === 4 ) selected @endif>Bendahara</option>
                  <option value=5 @if( $struktur->anggota_idRoleStruktur === 5 ) selected @endif>Anggota</option>
                  <option value=6 @if( $struktur->anggota_idRoleStruktur === 6 ) selected @endif>Koordinator</option>
                  <option value=7 @if( $struktur->anggota_idRoleStruktur === 7 ) selected @endif>Pembina</option>
                  <option value=8 @if( $struktur->anggota_idRoleStruktur === 8 ) selected @endif>Penasehat</option>
                  <option value=9 @if( $struktur->anggota_idRoleStruktur === 9 ) selected @endif>Sekretaris</option>
                  <option value=10 @if( $struktur->anggota_idRoleStruktur === 10 ) selected @endif>Bendahara</option>
                  <option value=11 @if( $struktur->anggota_idRoleStruktur === 11 ) selected @endif>Wakil Sekretaris</option>
                  <option value=12 @if( $struktur->anggota_idRoleStruktur === 12 ) selected @endif>Wakil Bendahara</option>
                </select>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name='ket'  class="form-control" placeholder="Keterangan" value="{{ $struktur->ket }}">
              </div>
              <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-2">
              <input type="submit" class="btn btn-block btn-outline-success" value='Update'>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-block btn-outline-danger" onclick="window.location.href='{{ url("admin/struktural") }}'">Cancel</button>
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