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
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#jadwal">Jadwal Reservasi</a></li>
                        <li><a class="nav-link scrollto" href="#team">Reservasi Gedung</a></li>
                        <li><a class="getstarted scrollto" href="/login-admin">Login</a></li>
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
                    <div class="row">
                        <center>
                            <h1>Jadwal Reservasi</h1>
                        </center>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td class="table-primary">No</td>
                                    <td class="table-primary">Nama</td>
                                    <td class="table-primary">Hari_tanggal</td>
                                    <td class="table-primary">Waktu_mulai</td>
                                    <td class="table-primary">waktu_berakhir</td>
                                    <td class="table-primary">Keterangan</td>
                                    <td class="table-primary">Status</td>
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
                                        <td>{{ $row->waktu_mulai }}</td>
                                        <td>{{ $row->waktu_berakhir }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td>
                                            @if ($row->status == 0)
                                                <span>Belum Lunas</span>
                                            @else
                                                <span>Lunas</span>
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

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Services</h2>
                            <p>Magnam dolores commodi suscipit nemo qui impedit suscipit alias ea. Quia fugiat sit in
                                iste officiis commodi quidem hic quas.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">Lorem Ipsum</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">Sed ut perspiciatis</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">Magni Dolores</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">Nemo Enim</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-left">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Testimonials</h2>
                            <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit
                                suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem
                                            cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                            noster fugiat irure amet legam anim culpa.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram
                                            fore quis sint minim.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                            minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt
                                            elit fore quem dolore labore illum veniam.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                            noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat
                                            legam esse veniam culpa fore nisi cillum quid.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                            alt="">
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Team</h2>
                            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
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
                                        <h4>Sarah Jhonson</h4>
                                        <span>Product Manager</span>
                                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
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
                                        <h4>William Anderson</h4>
                                        <span>CTO</span>
                                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
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
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
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
                            <h2>Contact</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                                quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui
                                impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>
                            </div>
                        </div>

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Bethany</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
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

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

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
