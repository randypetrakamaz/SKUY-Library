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
                <img src="{{ asset('my_assets/img/logo2.png') }}" alt="AdminLTE Logo" class="brand-image"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Skuy Library</span>
            </a>

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


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
                            <a href="/buku" class="nav-link">
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
                                <button type="submit" class="dropdown-item bg-dark "><i
                                        class="bi bi-box-arrow-in-left"></i>
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
                            <h1 class="m-0">Edit Berita</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="/dashboard/berita">Berita</a></li>
                                <li class="breadcrumb-item active">Edit Berita</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-8 col-sm-12 bg-white p-4">
                        <form method="post" action="{{ route('news.update', $berita->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" placeholder="Judul artikel" required autofocus
                                    value="{{ old('title', $berita->title) }}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-grup">
                                <label for="image" class="form-label">Gambar</label>
                                <input class="form-control @error('image') is-invalid @enderror mb-3" type="file"
                                    id="image" name="image" required onchange="lihatGambar()">
                                <input type="hidden" name="oldImage" value="{{ $berita->image }}">
                                @if ($berita->image)
                                <img src="{{ asset('storage/'. $berita->image)}}"
                                    class="img-preview img-fluid mb-3 col-sm-8 d-block">
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-8 d-block">
                                @endif
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <img class="img-preview img-fluid mb-3 col-sm-8 d-block">
                            </div>

                            <div class="form-group">
                                <label for="body" class="form-label">Konten</label>
                                <input id="body" type="hidden" name="body" value="{{ old('body', $berita->body) }}">
                                <trix-editor input="body" required></trix-editor>
                                @error('body')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary w-25" value="Edit">
                            </div>
                        </form>
                    </div>
                </div>
            </section>

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
            <!-- </div> -->
            <!-- ./wrapper -->

            @include('admin.layouts.linkbot')
            <script type="text/javascript" src="{{ asset('trix_editor/trix.js') }}"></script>
            <script>
                function lihatGambar() {
                    const gambar = document.querySelector('#image');
                    const lihatGambar = document.querySelector('.img-preview');

                    lihatGambar.style.diplay = 'block';

                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);

                    oFReader.onload = function (oFREvent) {
                        lihatGambar.src = oFREvent.target.result;
                    };
                }
            </script>
</body>

</html>