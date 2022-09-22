@extends('Admin.layouts.master')
 
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visi dan Misi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Visi dan Misi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Visi dan Misi Masjid Syukur Ampel</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Visi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Misi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Selayang Pandang</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    {!! $about -> visi !!}
                    <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-outline-primary" onclick="window.location.href='visimisi/edit/Visi'">Edit</button>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    {!! $about -> misi !!}
                    <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-outline-primary" onclick="window.location.href='visimisi/edit/Misi'">Edit</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab_3" >
                    {!! $about -> selayangPandang !!}
                    <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-outline-primary" onclick="window.location.href='visimisi/edit/Selayang_Pandang'">Edit</button>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->
      </div>
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection