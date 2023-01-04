<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reservasi Gedung Abral</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Bethany/assets/img/favicon.png" rel="icon">
    <link href="Bethany/assets/img/apple-touch -icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Vendor CSS Files -->
    <link href="Bethany/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Bethany/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Bethany/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Bethany/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Bethany/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Bethany/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="Bethany/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="Bethany/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany - v4.7.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<x-alert />
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="text-light"><a href="/"><span>Reservasi Gedung</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="Bethany/assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        @if (Str::length(auth()->user()) > 0)
                        {{ auth()->user()->name }}&nbsp;
                        <li><a class="getstarted scrollto" href="{{asset('logout')}}">Log out</a></li>
                    @else
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#jadwal">Jadwal Reservasi</a></li>
                        <li><a class="nav-link scrollto" href="#cta">Reservasi Gedung</a></li>
                        <li><a class="getstarted scrollto" href="/login">Login</a></li>
                    @endif
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>Reservasi Gedung Serba Guna Abral</h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="jadwal" class="jadwal">
            <div class="container">
                <div class="row">
                    <div class="row table-responsive">
                        <center>
                            <h1>Jadwal Reservasi</h1>
                        </center>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table-primary">No</th>
                                    <th class="table-primary">Nama</th>
                                    <th class="table-primary">Hari Tanggal</th>
                                    <th class="table-primary">Hari Berakhir</th>
                                    <th class="table-primary">Waktu</th>
                                    <th class="table-primary">jenis Reservasi</th>
                                    <th class="table-primary">Keterangan</th>
                                    <th class="table-primary">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($reservasi as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->hari_tanggal }}</td>
                                        <td>
                                            @if ($row->hari_berakhir == null)
                                            {{$row->hari_tanggal}}
                                            @else
                                            {{ $row->hari_berakhir }}
                                            @endif
                                        </td>
                                        <td>{{ $row->waktu_mulai }} S/d {{ $row->waktu_berakhir }}</td>
                                        <td>{{ $row->jenis_reservasi }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td>
                                            @if ($row->status == 0)
                                                <span>Belum Lunas</span>
                                            @else
                                                <span>Aktif</span>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $reservasi->links() }}
                        </table>
                    </div>


                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center" data-aos="zoom-in">
                    <h3>Gedung Abral Serba Guna</h3>
                    <p>Jl. Lohbener Lor, Lohbener, Indramayu, Jawa Barat 45252</p>
                    <a class="cta-btn" href="/reservasi">Reservasi</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Team</h2>
                            {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Muhammad Rizky Pratama</h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                        <p>Project Manager</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Dea Faradisa</h4>
                                        {{-- <span>Product Manager</span> --}}
                                        <p>Anggota</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Nova Astria Lestari</h4>
                                        {{-- <span>CTO</span> --}}
                                        <p>Anggota</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Deskripsi</h2>
                            <p>Aplikasi Reservasi Gedung Abral adalah aplikasi yang menangani tentang pemesanan gedung.
                                Aplikasi ini menyediakan beberapa fitur seperti pendaftaran pengunjung, melihat data gedung dan memesan gedung.
                                Aplikasi ini hadir untuk membantu konsumen/pembeli untuk memesan/reservasi gedung tanpa harus datang secara langsung dan mengetahui datanya serta harga gedung secara update. Pada sistem ini, kami membuat aplikasi untuk Gedung Abral yang pada proses reservasinya masih menggunakan sistem manual.
                                </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.958485927533!2d108.28161241477005!3d-6.399351195369708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb91b623ff43d%3A0x7b8478531337733b!2sGedung%20Serba%20Guna%20ABRAL!5e0!3m2!1sid!2sid!4v1670310888533!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>J72M+7G3, Jalan, Lohbener Lor, Lohbener, Indramayu Regency, West Java 45252</p>
                        </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 812 2277 9224</p>
                                </div>
                            </div>
                        </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="Bethany/assets/vendor/purecounter/purecounter.js"></script>
    <script src="Bethany/assets/vendor/aos/aos.js"></script>
    <script src="Bethany/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bethany/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Bethany/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Bethany/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Bethany/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="Bethany/assets/js/main.js"></script>

</body>

</html>
