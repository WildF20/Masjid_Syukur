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
            <form role="form" method='post' action='{{ url("admin/struktural/add") }}'>
              {{ csrf_field() }}
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name='nama'  class="form-control" placeholder="Masukkan Nama Lengkap" value="">
              </div>
              <div class="form-group">
                <label>Kategori Bidang</label>
                <select name='bidang' class="form-control">
                  <option value=2>Ketua Takmir</option>
                  <option value=3>Sekretaris</option>
                  <option value=4>Bendahara</option>
                  <option value=1>Pembina</option>
                  <option value=5>Penasehat</option>
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
                <label>Jabatan</label>
                <select name='jabatan' class="form-control">
                  <option value=1>Ketua</option>
                  <option value=2>Wakil</option>
                  <option value=3>Sekretaris</option>
                  <option value=4>Bendahara</option>
                  <option value=5>Anggota</option>
                  <option value=6>Koordinator</option>
                  <option value=7>Pembina</option>
                  <option value=8>Penasehat</option>
                  <option value=9>Sekretaris</option>
                  <option value=10>Bendahara</option>
                  <option value=11>Wakil Sekretaris</option>
                  <option value=12>Wakil Bendahara</option>
                </select>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name='ket'  class="form-control" placeholder="Keterangan" value="">
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                  <div class="col-md-2">
                    <input type="submit" class="btn btn-block btn-outline-success" value='Tambah'>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-block btn-outline-danger" onclick="window.location.href='{{ url("admin/struktural") }}'">Cancel</button>
                  </div>
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