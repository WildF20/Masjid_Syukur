@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Kajian Rutin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Kajian Rutin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class='row'>
          <div class='col-md-3'>
            <button type="button" class="btn btn-block btn-outline-primary btn-sm" onclick="window.location.href='kajian/tambah'">Tambah Jadwal</button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Kajian Rutin</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama Kajian</th>
                      <th>Hari</th>
                      <th>Waktu</th>
                      <th>Deskripsi Kajian</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($kajian as $a)
                    <tr>
                      <td>{{ $a->namaKajian }}</td>
                      <td>{{ $a->hariKajian }}</td>
                      <td>{{ $a->waktuKajian }}</td>
                      <td>{{ $a->deskripsiKajian }}</td>
                      <td>
                        <div class='row'>
                          <div class='col-md-6'>
                            <form action="kajian/edit" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $a->idKajian }}">
                              <input type="submit" class="btn btn-block btn-outline-success btn-sm" value="Edit">
                            </form>
                          </div>
                          <div class='col-md-6'>
                            <form action="kajian/delete" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $a->idKajian }}">
                              <input type="submit" class="btn btn-block btn-outline-danger btn-sm" value="Delete">
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  @endsection