<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
      <img src="{{ url('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ $setting -> titleWeb }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin/setting') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pengaturan Website
              </p>
            </a>
          </li>
          <li class="nav-header">PROFIL MASJID</li>
          <li class="nav-item">
            <a href="{{ url('admin/profil') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Profil Masjid
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="{{ url('admin/visimisi') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Visi dan Misi
              </p>
            </a>
          </li>         
          <li class="nav-item">
            <a href="{{ url('admin/struktural') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Struktural Takmir
              </p>
            </a>
          </li>
          <li class="nav-header">PROGRAM KERJA</li>
          <li class="nav-item">
            <a href="{{ url('admin/program') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Program Unggulan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/news') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/kajian') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kajian Rutin
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">KEUANGAN</li>
          <li class="nav-item">
            <a href="{{ url('admin/donatur') }}" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Donatur
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/keuangan') }}" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Laporan Keuangan
              </p>
            </a>
          </li> -->
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

      
    </div>
    <!-- /.sidebar -->
  </aside>