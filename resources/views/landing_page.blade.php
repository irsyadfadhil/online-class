<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Online Class</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
{{-- <link href="{{ asset('assets/img/favicon.png') }}" rel="icon"> --}}
{{-- <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

<!-- Additional CSS File as requested -->
<link rel="stylesheet" href="{{ asset('assets/cssbundle/daterangepicker.min.css') }}">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    {{-- <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar --> --}}

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="">
          <h1 class="sitename">Online Class</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Beranda</a></li>
            <li><a href="#about">Benefit</a></li>
            <li><a href="#services">Paket</a></li>
            <li><a href="#portfolio">Kelas</a></li>
            <li><a href="#team">Kontak Kami</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="#about" class="btn-get-started">Ajukan Demo</a></li>
              <li><a href="#about" class="btn-second">Masuk</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

    <div class="container d-flex justify-content-center align-items-center min-vh-70">
        <div class="row gy-3 text-center">
            <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center" data-aos="zoom-out">
            <h1>Tingkatkan Performa Bisnis Anda</h1>
            <p>Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Ajukan Demo</a>
                </div>
            </div>
        </div>
    </div>


    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">
        <div class="container">


            <div class="container d-flex justify-content-center align-items-center">
                <h1>Telah Dipercaya oleh 10.000+ Profesional User dari</h1>
            </div>
            <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                    },
                    "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                    },
                    "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                    },
                    "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                    }
                }
                }
            </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
                </div>
            </div>

        </div>
    </section><!-- /Clients Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title">
            {{-- <h2>Portfolio</h2> --}}
            <p>Bagaimana Kelas Center Membantu Anda?</span></p>
            <h5>Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</h5>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter=".filter-app" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters">
                    {{-- <li data-filter="" class="filter-active"></li> --}}
                    <li data-filter=".filter-app" class="filter-active">App</li>
                    <li data-filter=".filter-product">Card</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container">

                    <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="container">

                            <div class="row gy-3">

                                <div class="col-lg-6 d-flex flex-column justify-content-center">
                                    <div class="about-content ps-0 ps-lg-3">
                                    <h3>Tes</h3>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li>
                                        <i class="bi bi-diagram-3"></i>
                                        <div>
                                            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                                            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                                        </div>
                                        </li>
                                        <li>
                                        <i class="bi bi-fullscreen-exit"></i>
                                        <div>
                                            <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                                            <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                                        </div>
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum
                                    </p>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <img src="assets/img/about.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="container">

                            <div class="row gy-3">

                                <div class="col-lg-6 d-flex flex-column justify-content-center">
                                    <div class="about-content ps-0 ps-lg-3">
                                    <h3>Tes</h3>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li>
                                        <i class="bi bi-diagram-3"></i>
                                        <div>
                                            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                                            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                                        </div>
                                        </li>
                                        <li>
                                        <i class="bi bi-fullscreen-exit"></i>
                                        <div>
                                            <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                                            <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                                        </div>
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum
                                    </p>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <img src="assets/img/about.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

   <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title">
            <p><span>Pilihan Paket Untuk Perusahaan di Kelas Center</span></p>
        </div><!-- End Section Title -->

        <div class="container">
            <!-- Slider -->
            <div class="pricing-slider">
                <!-- Pricing Items -->
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->
                <!-- Duplicate this block for more items -->
            </div><!-- End Slider -->
        </div>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                        <div class="faq-content">
                        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                        </div>
                    </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Pricing Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title">
            {{-- <h2>Portfolio</h2> --}}
            <p>Lebih dari 2000+ Learning Video</p>
            <h5>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi.</h5>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter=".filter-app" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters">
                    {{-- <li data-filter="" class="filter-active"></li> --}}
                    <li data-filter=".filter-app" class="filter-active">App</li>
                    <li data-filter=".filter-product">Card</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container">

                    <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="container">

                            <div class="row gy-3">

                                <div class="col-lg-6 d-flex flex-column justify-content-center">
                                    <div class="about-content ps-0 ps-lg-3">
                                    <h3>Tes</h3>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li>
                                        <i class="bi bi-diagram-3"></i>
                                        <div>
                                            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                                            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                                        </div>
                                        </li>
                                        <li>
                                        <i class="bi bi-fullscreen-exit"></i>
                                        <div>
                                            <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                                            <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                                        </div>
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum
                                    </p>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <img src="assets/img/about.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="container">

                            <div class="row gy-3">

                                <div class="col-lg-6 d-flex flex-column justify-content-center">
                                    <div class="about-content ps-0 ps-lg-3">
                                    <h3>Tes</h3>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li>
                                        <i class="bi bi-diagram-3"></i>
                                        <div>
                                            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                                            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                                        </div>
                                        </li>
                                        <li>
                                        <i class="bi bi-fullscreen-exit"></i>
                                        <div>
                                            <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                                            <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                                        </div>
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum
                                    </p>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <img src="assets/img/about.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.png" class="testimonials-bg" alt="">

        <div class="container">

            <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <h3>Tingkatkan Kualitas Perusahaan Anda</h3>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <a href="#about" class="btn-get-started">Ajukan Demo</a>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">BizLand</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BizLand</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" type="text/javascript"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>

<!-- Slick Slider JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.pricing-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
    </script>


</body>

</html>
