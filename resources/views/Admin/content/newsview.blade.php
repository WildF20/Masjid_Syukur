@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/news') }}">Berita</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              Detail Berita
            </h3>
          </div>
          <div class="card-body">
            <div class='post'>
                <div class='row'>
                    <div class='col-md-10'>
                        <h4>{{ $berita->judulBerita }}</h4>
                    </div>
                    <div class='col-md-1'>
                        <form action="{{ url('admin/news/edit/berita') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $berita->idBerita }}">
                            <input type="submit" class="btn btn-block btn-outline-success btn-sm" value="Edit">
                        </form>
                    </div>
                    <div class='col-md-1'>
                      <button type="button" class="btn btn-block btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-danger">
                        Delete
                      </button>
                    </div>
                </div>
            </div>
            <div class='post clearfix'>
                <div class='row'>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid" src="{{ url('/img/news/').'/'.$berita->picBerita }}" alt="Photo">
                    </div>
                    <div class="col-sm-5">
                        <div class="user-block">
                          <span class="username">
                              <a href="#">Admin</a>
                          </span>
                          <span class="description">Shared publicly - {{ $berita->created_at->format('d M Y') }}</span>
                          <span class="description">at - {{ $berita->created_at->format('H:i') }}</span>
                          <span></span>
                          @foreach($bidang as $a)
                          @if($berita->berita_idBidang === $a->idBidang)
                          <span class="description">Categories :   {{ $a->namaBidang }}</span>
                          @endif
                          @endforeach
                          <p></p>
                          <span class="description">
                            <form action="{{ url('admin/news/edit/gambar') }}" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $berita->idBerita }}">
                              <input type="submit" class="btn btn-block btn-outline-success btn-sm" value="Edit Gambar">
                            </form>
                          </span>
                          <p></p>
                          <span class='description'>
                            <p>{{ $berita->beritaDesc }}</p>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post clearfix">
                      
                      {!! $berita -> isiBerita !!}

          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Perhatian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Konfirmasi Hapus&hellip;!!</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <form action="{{ url('admin/news/delete') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $berita->idBerita }}">
                <input type="submit" class="btn btn-outline-light" value="Confirm">
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  @endsection