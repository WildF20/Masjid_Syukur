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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              Edit Jadwal Kajian
            </h3>
          </div>
          <div class="card-body">
            <form role="form" method='post' action='{{ url("admin/kajian/update/$kajian->idKajian") }}'>
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label>Nama Kajian</label>
                <input name='nama' type="text" class="form-control"  value='{{ $kajian->namaKajian }}' placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label>Hari</label>
                <select name='hari' class="form-control">
                  <option value='Senin' @if( $kajian->hariKajian === 'Senin' ) selected @endif>Senin</option>
                  <option value='Selasa' @if( $kajian->hariKajian === 'Selasa' ) selected @endif>Selasa</option>
                  <option value='Rabu' @if( $kajian->hariKajian === 'Rabu' ) selected @endif>Rabu</option>
                  <option value='Kamis' @if( $kajian->hariKajian === 'Kamis' ) selected @endif>Kamis</option>
                  <option value="Jum'at" @if( $kajian->hariKajian === "Jum'at" ) selected @endif>Jum'at</option>
                  <option value='Sabtu' @if( $kajian->hariKajian === 'Sabtu' ) selected @endif>Sabtu</option>
                  <option value='Ahad' @if( $kajian->hariKajian === 'Ahad' ) selected @endif>Ahad</option>
                </select>
              </div>
              <div class="form-group">
                <label>Waktu</label>
                <input name='waktu' type="text" class="form-control" value='{{ $kajian->waktuKajian }}' placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label>Deskripsi Kajian</label>
                <textarea name='deskripsi' class="form-control" rows="3" placeholder="Enter ...">{{ $kajian->deskripsiKajian }}</textarea>
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                  <input type='submit' class="btn btn-block btn-outline-success" value='Update'></button>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-block btn-outline-danger" onclick="window.location.href='{{ url("admin/kajian") }}'">Cancel</button>
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