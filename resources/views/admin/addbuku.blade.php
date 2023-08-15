<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.layouts.link')
</head>

<body>
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('my_assets/img/load.png') }}" alt="AdminLTELogo" height="60"
        width="60">
    </div>


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="{{ asset('my_assets/img/logo2.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">Skuy Library</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('template_admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
              alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MENU</li>
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="fas fa-home"></i>
                <p>Beranda</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/buku" class="nav-link active disabled">
                <i class="fas fa-book"></i>
                <p>Buku</p>
              </a>
            </li>
            <li class="nav-item active disabled">
              <a href="/dashboard/berita" class="nav-link">
                <i class="fas fa-newspaper"></i>
                <p>Berita</p>
              </a>
            </li>
            <li class="nav-item active disabled">
                            <a href="/register" class="nav-link">
                                <i class="fas fa-newspaper"></i>
                                <p>Tambah Akun</p>
                            </a>
                        </li>
            <li class="nav-item active disabled">
              <form action="/logout" method="post" class="d-block">
                @csrf
                <button type="submit" class="dropdown-item bg-dark "><i class="bi bi-box-arrow-in-left"></i>
                  Logout</button>
              </form>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside> -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Buku</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/dashboard/buku">Buku</a></li>
                <li class="breadcrumb-item active">Tambah Buku</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="col-md-8 col-sm-12 bg-white p-4">
            <form method="post" action="{{route('buku.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul">
              </div>
              <div class="form-group">
                <label>Jumlah Buku</label>
                <input type="string" class="form-control" name="jumlah" placeholder="Jumlah">
              </div>
              <div class="form-group">
                <label>Bahasa Buku</label>
                <input type="text" class="form-control" name="bahasa" placeholder="Bahasa">
              </div>
              <div class="form-group">
                <label>Jenis</label>
                <input type="text" class="form-control" name="jenis" placeholder="Jenis">
              </div>
              <div class="form-group">
                <label>Terbit Buku</label>
                <input type="date" class="form-control" name="terbit">
              </div>
              <div class="form-group">
                <label>Halaman Buku</label>
                <input type="string" class="form-control" name="halaman">
              </div>
              <div class="form-group">
                <label>Sinopsis1</label>
                <textarea class="form-control" name="sinopsis1" rows="15"></textarea>
              </div>
              <div class="form-group">
                <label>Sinopsis2</label>
                <textarea class="form-control" name="sinopsis2" rows="15"></textarea>
              </div>
              <div class="form-group">
                <label for="gambar" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="gambar" name="gambar">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary w-25" value="Upload">
              </div>
          </div>

          </form>


        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @include('admin.layouts.linkbot')
</body>

</html>