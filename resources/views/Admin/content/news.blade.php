@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class='row'>
          <div class='col-md-3'>
            <button type="button" class="btn btn-block btn-outline-primary btn-sm" onclick="window.location.href='news/tambah'">Tambah Berita</button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card"> 
            <div class="card-header">
              <h3 class="card-title">Berita</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>JuduL Berita</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($berita as $a)
                <tr>
                  <td>{{ $a->judulBerita }}</td>
                  <td>{{ $a->created_at->format('d M Y H:i') }}
                  </td>
                  <td>{{ $a->beritaDesc }}</td>
                  <td>
                  <form role='form' method='post' action="{{ route('lihat', ['id' => $a->slug_judul]) }}">
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $a->idBerita }}'>
                    <input type='submit' class="btn btn-block btn-outline-success btn-xs" value='View'>
                  </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>JuduL Berita</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection