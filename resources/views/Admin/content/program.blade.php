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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Program Unggulan
            </h3>
          </div>
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              @foreach($bidang as $a)
              @if($a->idBidang == 6)
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-{{ $a->idBidang }}-tab" data-toggle="pill" href="#custom-content-above-{{ $a->idBidang }}" role="tab" aria-controls="custom-content-above-{{ $a->idBidang }}" aria-selected="true">{{ $a->namaBidang }}</a>
              </li>
              @elseif($a->idBidang >6 )
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-{{ $a->idBidang }}-tab" data-toggle="pill" href="#custom-content-above-{{ $a->idBidang }}" role="tab" aria-controls="custom-content-above-{{ $a->idBidang }}" aria-selected="false">{{ $a->namaBidang }}</a>
              </li>
              @endif
              @endforeach
            </ul>
            <div class="tab-custom-content">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-block btn-outline-success" onclick="window.location.href='program/tambah'">Tambah Program</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
            <!-- separator -->

            <div class="tab-content" id="custom-content-above-tabContent">

              @foreach($bidang as $b)
              @if($b->idBidang == 6)
              <div class="tab-pane fade show active" id="custom-content-above-{{ $b->idBidang }}" role="tabpanel" aria-labelledby="custom-content-above-{{ $b->idBidang }}-tab">
                @foreach($program as $c)
                @if($c->program_idBidang === $b->idBidang)
                <div class="modal fade" id="modal-danger{{ $c->idProgram }}">
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
                        <form role='form' method='post' action='program/delete'>
                          {{ csrf_field() }}
                          <input type='hidden' name='id' value='{{ $c->idProgram }}'>
                          <input type='submit' class="btn btn-outline-light" value="Confirm">
                        </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- Head Program -->
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <div class='row'>
                      <div class='col-md-6'>
                        <h3 class="card-title">{{ $c->namaProgram }}</h3>
                      </div>
                      <div class="col-md-4"></div>
                      <div class='col-md-1'>
                        <form role='form' method='post' action='program/edit'>
                        {{ csrf_field() }}
                          <input type='hidden' name='id' value='{{ $c->idProgram }}'>
                          <input type='submit' class="btn btn-block btn-outline-success btn-xs" value='Edit'>
                        </form>
                      </div>
                      <div class='col-md-1'>
                        <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-danger{{ $c->idProgram }}">
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>{{ $c->deskripsiProgram }}</p>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
              @endif
              @if($b->idBidang > 6)
              <div class="tab-pane fade" id="custom-content-above-{{ $b->idBidang }}" role="tabpanel" aria-labelledby="custom-content-above-{{ $b->idBidang }}-tab">
                @foreach($program as $c)
                @if($c->program_idBidang === $b->idBidang)
                <div class="modal fade" id="modal-danger{{ $c->idProgram }}">
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
                        <form role='form' method='post' action='program/delete'>
                          {{ csrf_field() }}
                          <input type='hidden' name='id' value='{{ $c->idProgram }}'>
                          <input type='submit' class="btn btn-outline-light" value="Confirm">
                        </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- Head Program -->
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <div class='row'>
                      <div class='col-md-6'>
                        <h3 class="card-title">{{ $c->namaProgram }}</h3>
                      </div>
                      <div class="col-md-4"></div>
                      <div class='col-md-1'>
                        <form role='form' method='post' action='program/edit'>
                          {{ csrf_field() }}
                          <input type='hidden' name='id' value='{{ $c->idProgram }}'>
                          <input type='submit' class="btn btn-block btn-outline-success btn-xs" value='Edit'>
                        </form>                      
                      </div>
                      <div class='col-md-1'>
                        <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-danger{{ $c->idProgram }}">
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>{{ $c->deskripsiProgram }}</p>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
              @endif
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection