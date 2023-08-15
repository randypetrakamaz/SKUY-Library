<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Skuy | Beranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('my_assets/img/favicon/skuyfav.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template//vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('my_assets/css/style.css') }}" rel="stylesheet">

    <!-- bostrapicont -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="/"><img src="{{ asset('my_assets/img/logo.png') }}" alt=""></a>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active nav-link disabled" href="/">Beranda</a></li>
                    <li class="dropdown"><a href="/cari"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/cari">Cari Buku</a></li>
                            <li><a href="/pinjam">Peminjaman Buku</a></li>
                            <li><a href="/kembali">Pengembalian Buku</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/visimisi">Visi dan Misi</a></li>
                            <li><a href="/jamlayanan">Jam Layanan</a></li>
                            <li><a href="/fasilitas">Fasilitas</a></li>
                            <li><a href="jeniskoleksi">Jenis Koleksi</a></li>
                            <li><a href="/profile">Profil</a></li>
                        </ul>
                    <li><a href="/faq">FAQ</a></li>
                    <li class="nav-item">
                        <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i>Admin</a>
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- end navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" class="container carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <img src="{{ asset('my_assets/img/hero/lib1.jpg') }}" alt="" class="d-block" data-bs-interval="500">
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <img src="{{ asset('my_assets/img/hero/lib2.jpg') }}" alt="" class="d-block"
                        data-bs-interval="1000">
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <img src="{{ asset('my_assets/img/hero/lib4.jpg') }}" alt="" class="d-block">
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left blue-bg-rounded" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right blue-bg-rounded" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Layanan Section ======= -->
        <section class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Layanan <span class="title-blue">Kami</span></h2>
                    <!-- <p>Layanan - layanan yang tersedia pada perpustakaan</p> -->
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch selector-for-some-widget"
                        data-aos="fade-up">
                        <div class="icon-box icon-box-pink" style="width: 14rem;">
                            <div class="icon"><i class="bi bi-search"></i></div>
                            <h4 class="title text-wrap"><a href="/cari">Pencarian Buku</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch selector-for-some-widget"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan" style="width: 14rem;">
                            <div class="icon"><i class="bi bi-book"></i></div>
                            <h4 class="title"><a href="/pinjam">Peminjaman Buku</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green style=" width: 14rem;"">
                            <div class="icon"><i class="bi bi-skip-backward"></i></i></div>
                            <h4 class="title"><a href="/kembali">Pengembalian Buku</a></h4>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Berita Section ======= -->
        @if (count($beritas))
        <section class="services" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="section-title">
                    <h2>Berita <span class="title-blue">Terbaru</span></h2>
                    <!-- <p>Kumpulan berita dan pengumuman terkait kegiatan dalam perpustakaan</p> -->
                </div>

                <div class="row">
                    @if ($beritas->count() > 4)
                    @for ($i = 0; $i < 4; $i++ ) <div class="col-md-6 col-lg-3 d-flex align-items-stretch"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box 
                                    @if ($i == 0)
                                        icon-box-pink
                                    @elseif ($i == 1)
                                        icon-box-cyan
                                    @elseif ($i == 2)
                                        icon-box-green
                                    @elseif ($i == 3)
                                        icon-box-blue
                                    @endif p-0">
                            <div class="news-img-container">
                                <img src="{{ asset('storage/' . $beritas[$i]->image) }}" alt=""
                                    class="card-img-top mb-2">
                            </div>

                            <div class="card-body p-4">
                                <div class="size-title">
                                    <h4 class="title"><a href="/berita-{{ $beritas[$i]->id }}">{{ $beritas[$i]->title
                                            }}</a></h4>
                                </div>
                                <p class="text-start text-black-50"><i class="bi bi-calendar"></i> {{
                                    $beritas[$i]->updated_at->format("d/m/Y") }}</p>
                                <div class="size-body">
                                    <p class="description text-start text-wrap">{{
                                        strip_tags(Str::limit($beritas[$i]->body, 70)) }}</p>
                                </div>
                                <p class="text-start mt-2"><a href="/berita-{{ $beritas[$i]->id }}">Baca lebih
                                        lanjut>></a></p>
                            </div>
                        </div>
                </div>
                @endfor
                @else
                @foreach ($beritas as $i => $item)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box 
                                    @if ($i == 0)
                                        icon-box-pink
                                    @elseif ($i == 1)
                                        icon-box-cyan
                                    @elseif ($i == 2)
                                        icon-box-green
                                    @elseif ($i == 3)
                                        icon-box-blue
                                    @endif p-0">

                        <div class="news-img-container">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="" class="card-img-top mb-2">
                        </div>

                        <div class="card-body p-4">
                            <div class="size-title">
                                <h4 class="title"><a href="/berita-{{ $item->id }}">{{ $item->title }}</a></h4>
                            </div>
                            <p class="text-start text-black-50"><i class="bi bi-calendar"></i> {{
                                $item->updated_at->format("d/m/Y") }}</p>
                            <div class="size-body">
                                <p class="description text-start text-wrap">{{ strip_tags(Str::limit($item->body, 70))
                                    }}</p>
                            </div>
                            <p class="text-start mt-2"><a href="/berita-{{ $item->id }}">Baca lebih lanjut>></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <div class="d-flex justify-content-center mt-3 mb-5">
                <a class="btn btn-primary" href="/berita" role="button">Lihat Semua</a>
            </div>
            </div>
        </section>
        @endif
        <!-- End Berita Section -->


        <!-- ======= Quotes Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active section-title quotes-container mt-5" data-bs-interval="4000">
                        <q class="quote-word">Ketika kamu ragu akan sesuatu, carilah di perpustakaan.</q>
                        <p class="mt-2">~ J. K. Rowling ~</p>
                    </div>

                    <div class="carousel-item section-title quotes-container mt-5" data-bs-interval="5000">
                        <q class="quote-word">Aku adalah bagian dari semua yang telah aku baca</q>
                        <p class="mt-2">~ Theordore Rosevelt, <i>Presiden Amerika ke-26</i> ~</p>
                    </div>

                    <div class="carousel-item section-title quotes-container mt-5">
                        <q class="quote-word">Aku rela dipenjara bersama buku, karena dengan buku aku bebas</q>
                        <p class="mt-2">~ Moh.Hatta, <i>Wakil Presiden Republik Indonesia Pertama</i> ~</p>
                    </div>
                </div>
            </div>
        </section><!-- End Quotes -->


        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Kategori <span class="title-blue">Koleksi Buku</span></h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <div class="row mt-img-booklist">
                            <div class="col"></div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/perang.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/sejarah.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col"></div>
                        </div>

                        <div class="row mt-img-booklist">
                            <div class="col"></div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/teh.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/world.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>

                    <div class="col-md-7 pt-4">
                        <h3>Sejarah</h3>
                        <p>
                            Sejarah adalah salah satu topik yang tidak pernah membosankan untuk kita bahas. Hal itu
                            seringkali menyangkut mengenai sebuah peristiwa besar yang terjadi di masa lalu.
                        </p>
                        Buku sejarah dunia merupakan salah satu jalan untuk melihat dunia tanpa perlu keliling dunia
                        secara langsung. Meskipun Anda belum pernah singgah di tempat tersebut, buku sejarah dunia mampu
                        membuat Anda memahami setiap detail peristiwa yang telah terjadi di tempat tersebut. Itulah
                        kekuatan utama dari buku sejarah dunia.
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <div class="row mt-img-booklist">
                            <div class="col"></div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/traveline.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/stone.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col"></div>
                        </div>

                        <div class="row mt-img-booklist">
                            <div class="col"></div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/dikta.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/tengahmalam.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Novel</h3>
                        <p>
                            Novel merupakan salah satu jenis buku fiksi yang sampai saat ini memang masih banyak
                            peminatnya.
                            Novel merupakan suatu karya sastra berbentuk prosa naratif yang panjang, dimana di dalamnya
                            terdapat rangkaian cerita tentang kehidupan seorang tokoh dan orang-orang di sekitarnya
                            dengan menonjolkan sifat dan watak dari setiap tokoh dalam novel tersebut.
                        </p>
                        <p>
                            Tidak seperti cerpen (cerita pendek), isi cerita sebuah novel jauh lebih panjang dan
                            kompleks, serta terdapat pesan tersembunyi yang ingin disampaikan kepada pembacanya.
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <div class="row mt-img-booklist">
                            <div class="col"></div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/rudy.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/hatta.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col"></div>
                        </div>

                        <div class="row mt-img-booklist">
                            <div class="col"></div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/sudirman.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col  col-lg-3">
                                <img src="{{ asset('my_assets/img/buku/tanmalaka.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>

                    <div class="col-md-7 pt-4">
                        <h3>Biografi</h3>
                        <p>
                            Mengenal tokoh-tokoh bangsa salah satu caranya bisa dengan membaca buku biografi. Selain
                            mengetahui perjalanan hidup nan heroik mereka, dengan membaca buku biografi, kita juga akan
                            mendapatkan motivasi, serta nilai-nilai hidup yang bermanfaat bagi kita.
                        </p>
                        <p>
                            Jasa mereka yang begitu besar terhadap negara, tentu berasal dari keteguhan dan keberanian.
                            Dengan hal itu, kita perlu mengenal para tokoh-tokoh bangsa untuk mengetahui, dan kembali
                            mengangkat jasa-jasa besar mereka
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5 mb-5">
                    <a class="btn btn-primary" href="/cari" role="button">Lihat Koleksi</a>
                </div>
            </div>
        </section>


        <!-- ======= Open Library Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="lib-container">
                <div class="section-title mt-5">
                    <div class="row mb-4">
                        <div class="col-4">
                            <img src="{{ asset('my_assets/img/onlinelib/ebsco.png') }}" class="col-8" alt="">
                        </div>

                        <div class="col-4">
                            <img src="{{ asset('my_assets/img/onlinelib/cambridge.png') }}" class="col-8" alt="">
                        </div>

                        <div class="col-4">
                            <img src="{{ asset('my_assets/img/onlinelib/proquest.png') }}" class="col-8" alt="">
                            < </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('my_assets/img/onlinelib/wiley.png') }}" class="col-8" alt=""></a>
                            </div>

                            <div class="col-4">
                                <img src="{{ asset('my_assets/img/onlinelib/gale.png') }}" class="col-10" alt=""></a>
                            </div>

                            <div class="col-4">
                                <img src="{{ asset('my_assets/img/onlinelib/openlib.png') }}" class="col-8" alt=""></
                                    </div>
                            </div>
                        </div>
                    </div>
        </section><!-- ======= End Open Library ======= -->

    </main><!-- End #main-->


    <!-- ======= Footer ======= -->
    <div data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <svg style="background-color: #f3f8fa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d2735" fill-opacity="1"
                d="M0,128L80,144C160,160,320,192,480,218.7C640,245,800,267,960,266.7C1120,267,1280,245,1360,234.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>

        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 footer-info">
                            <img src="{{ asset('my_assets/img/logo2.png') }}" alt="" class="w-50 mb-4">
                            <h5>Skuy Library</h5>
                            <p>Karangkidul, Kec. Semarang Tengah, Kota <br>Semarang, Jawa Tengah, 50241</p>
                            <p><i class="bi bi-telephone"></i>&nbsp Telepon: (0274) 513163</p>
                            <p><i class="bi bi-envelope"></i>&nbsp E-mail: library@skuy.ac.id</p>
                            <p><i class="bi bi-whatsapp"></i>&nbsp Whatsapp: 0811 2944 064</p>
                            <div class="social-links mt-4">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Jam Operasional</h4>
                            <p><i class="bx bx-chevron-right"></i>Senin - Kamis</p>
                            <p>&nbsp&nbsp&nbsp 08.00-16.00 WIB</p>
                            <p><i class="bx bx-chevron-right"></i>Jumat</p>
                            <p>&nbsp&nbsp&nbsp 08.00-11.00 WIB</p>
                            <p>&nbsp&nbsp&nbsp 13.00-16.00 WIB</p>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Link Terkait</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/cari">Cari Buku</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/pinjam">Pinjam Buku</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/kembali">Kembalikan Buku</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-contact">
                            <h4>Google Maps</h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.32913046509!2d110.42355507238167!3d-6.9898888806761645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca736e32dfd%3A0xd645c6e3bc004f4d!2sKarangkidul%2C%20Kec.%20Semarang%20Tengah%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1670302530871!5m2!1sid!2sid"
                                tyle="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="w-100 h-75"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('template/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/js/main.js') }}"></script>

</body>