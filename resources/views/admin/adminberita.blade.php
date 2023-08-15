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
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-header">MENU</li>
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="fas fa-home"></i>
                <p>Beranda</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/buku" class="nav-link">
                <i class="fas fa-book"></i>
                <p>Buku</p>
              </a>
            </li>
            <li class="nav-item">
              <div class="nav-link active">
                <i class="fas fa-newspaper"></i>
                <p>Berita</p>
              </div>
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
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">List Database Berita</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
                <li class="breadcrumb-item active">Berita</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <h2>
            <center></center>
          </h2>

          @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
          @endif
          <div class="col-md-12 bg-white p-4">
            <a href="/dashboard/berita/tambah-berita"><button class="btn btn-primary mb-3">Tambah Berita</button></a>
            <table class="table table-responsive table-bordered table-hover table-stripped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Judul</th>
                  <th>Tanggal Upload</th>
                  <th>Konten</th>
                  <th>Gambar</th>
                  <th width="15%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($beritas as $i => $item)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->updated_at->format("d/m/Y") }}</td>
                  <td>{{ strip_tags(Str::limit( $item->body,90)) }}</td>
                  <td><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt=""></td>
                  <td>
                    <a href="/dashboard/berita/edit-berita-{{ $item->id }}"><button
                        class="btn btn-success d-inline">Edit</button></a>
                    <form action="{{ route('news.destroy', $item->id) }}" method="post" enctype="multipart/form-data"
                      class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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