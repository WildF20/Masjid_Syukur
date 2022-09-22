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
        <div class='row'>
          <div class='col-md-3'>
            <button type="button" class="btn btn-block btn-outline-primary btn-sm" onclick="window.location.href='struktural/tambah'">Tambah Anggota</button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          

          @foreach ($bidang as $a)
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">{{ $a->namaBidang }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($struktur as $b)
                  @if ($a->idBidang === $b->anggota_idBidang)
                  <tr>
                    <td>{{ $b->namaAnggota }}</td>
                    @foreach ($rolestruktur as $c)
                    @if ($c->idRoleStruktur === $b->anggota_idRoleStruktur)
                    <td>{{ $c->namaRole }} </td>
                    @endif
                    @endforeach
                    <div class="modal fade" id="modal-danger{{ $b->idAnggota }}">
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
                            <form action="struktural/delete" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $b->idAnggota }}">
                              <input type="submit" class="btn btn-outline-light" value="Confirm">
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <td>{{ $b->ket }} </td>
                    <td>
                      <div class='row'>
                        <div class='col-md-6'>
                          <form action="struktural/edit" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $b->idAnggota }}">
                            <input type="submit" class="btn btn-block btn-outline-success btn-sm" value="Edit">
                          </form>
                        </div>
                        <div class='col-md-6'>
                          <button type="button" class="btn btn-block btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-danger{{ $b->idAnggota }}">
                            Delete
                          </button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                  <!-- endif -->
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          @endforeach
          
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  
 