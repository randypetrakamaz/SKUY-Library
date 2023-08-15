<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset ('template/img/favicon.png') }}" rel="icon">
  <link href="{{ asset ('template/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('template/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('template/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('template/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('template/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('template/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('template/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('template/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="#">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Cari Buku dan Jurnal</a></li>
              <li><a href="#">Peminjaman Buku</a></li>
              <li><a href="#">Pengembalian Buku</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href=""><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/visimisi">Visi dan Misi</a></li>
              <li><a href="/jamlayanan">Jam Layanan</a></li>
              <li><a href="/fasilitas">Fasilitas</a></li>
              <li><a href="jeniskoleksi">Jenis Koleksi</a></li>
              <li><a href="/profile">Profil</a></li>
            </ul>
          </li>
          <li><a href="/faq">FAQ</a></li>
          <li class="nav-item">
            <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i>Admin</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <div class="container">
      <form method="post" action="{{route('buku.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="judul" class="form-control" id="judul" name="judul" placeholder="Judul">
        </div>
        <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input type="jumlah" class="form-control" id="jumlah" name="jumlah">
        </div>
        <div class="mb-3">
          <label for="bahasa" class="form-label">Bahasa</label>
          <input type="bahasa" class="form-control" id="bahasa" name="bahasa">
        </div>
        <div class="mb-3">
          <label for="jenis" class="form-label">Jenis</label>
          <input type="jenis" class="form-control" id="jenis" name="jenis">
        </div>
        <div class="mb-3">
          <label for="terbit" class="form-label">Terbit</label>
          <input type="terbit" class="form-control" id="terbit" name="terbit">
        </div>
        <div class="mb-3">
          <label for="halaman" class="form-label">Halaman</label>
          <input type="halaman" class="form-control" id="halaman" name="halaman">
        </div>
        <div class="mb-3">
          <label for="sinopsis1" class="form-label">Sinopsis 1</label>
          <textarea class="form-control" id="sinopsis1" name="sinopsis1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="sinopsis2" class="form-label">Sinopsis 2</label>
          <textarea class="form-control" id="sinopsis2" name="sinopsis2" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input class="form-control" type="file" id="gambar" name="gambar">
        </div>
        <button class="btn btn-outline-info" type="submit" value="input">Submit</button>
      </form>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
              darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('template/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset ('template/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset ('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('template/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('template/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset ('template/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset ('template/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset ('template/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('template/js/main.js') }}"></script>

</body>

</html>