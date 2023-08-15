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

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="brand-link">
                <img src="{{ asset('my_assets/img/logo2.png') }}" alt="AdminLTE Logo" class="brand-image"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Skuy Library</span>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('template_admin/dist/img/user2-160x160.jpg') }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">MENU</li>
                        <li class="nav-item">
                            <div class="nav-link active">
                                <i class="fas fa-home"></i>
                                <p>Beranda</p>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/buku" class="nav-link">
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
                                <button type="submit" class="dropdown-item bg-dark "><i
                                        class="bi bi-box-arrow-in-left"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                                <li></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h4><b>Berita</b></h4>
                                    <p>Kelola data berita</p>
                                </div>
                                <div class="icon">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                                <a href="/dashboard/berita" class="small-box-footer">Info Lanjut <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h4><b>Buku</b></h4>
                                    <p>Kelola data buku</p>
                                </div>
                                <div class="icon">
                                    <i class="bi bi-book"></i>
                                </div>
                                <a href="/dashboard/buku" class="small-box-footer">Info Lanjut<i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-database mr-1"></i>
                                    Database
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#buku" data-toggle="tab">Buku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#berita" data-toggle="tab">Berita</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <div class="chart tab-pane active" id="buku">
                                        <table id="buku"
                                            class="table table-responsive table-bordered table-hover table-stripped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Judul</th>
                                                    <th>Jumlah</th>
                                                    <th>Bahasa</th>
                                                    <th>Jenis</th>
                                                    <th>Terbit</th>
                                                    <th>Halaman</th>
                                                    <th>Sinopsis 1</th>
                                                    <th>Sinopsis 2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($Buku as $i => $buku)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $buku->judul }}</td>
                                                    <td>{{ $buku->jumlah }}</td>
                                                    <td>{{ $buku->bahasa }}</td>
                                                    <td>{{ $buku->terbit }}</td>
                                                    <td>{{ $buku->halaman }}</td>
                                                    <td>{{strip_tags(Str::limit( $buku->sinopsis1,70)) }}</td>
                                                    <td>{{strip_tags(Str::limit( $buku->sinopsis2,70)) }}</td>
                                                    <td><img src="{{ asset('storage/' . $buku->gambar) }}"
                                                            class="img-fluid" alt=""></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="chart tab-pane" id="berita" style="position: relative;">
                                        <table id="berita"
                                            class="table table-responsive table-bordered table-hover table-stripped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Judul</th>
                                                    <th>Tanggal Upload</th>
                                                    <th>Konten</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($beritas as $i => $item)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->updated_at->format("d/m/Y") }}</td>
                                                    <td>{{ strip_tags(Str::limit( $item->body,90)) }}</td>
                                                    <td><img src="{{ asset('storage/' . $item->image) }}"
                                                            class="img-fluid" alt=""></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
        </div>

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

    @include('admin.layouts.linkbot')
</body>

</html>