<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Sailor Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg position-fixed top-0 start-0 w-100" style="z-index: 9999;">
        <div class="container-fluid px-5 d-flex align-items-center justify-content-between">

            <!-- Logo Section -->
            <div class="logo d-inline-flex align-items-center p-2 bg-white shadow-sm gap-2 rounded-pill">
                <img src="{{ asset('assets/images/logo_dpmptsp.png') }}" class="logo-img img-fluid" alt="logo_dpmptsp">
                <img src="{{ asset('assets/images/logo_jic.png') }}" class="logo-img img-fluid" alt="logo_jic">
                <img src="{{ asset('assets/images/logo_jakbizhub.png') }}" class="logo-img img-fluid" alt="logo_jakbizhub">
            </div>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list fs-4"></i>
            </button>

            <!-- Menu Items - Aligned Right -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="nav-background rounded-pill bg-white px-3 py-1" style="box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <ul class="navbar-nav align-items-center mb-0">

                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="/landing" style="font-size: 11px; padding: 6px 12px; color: #c7a56a;">
                                JIF 2025
                            </a>
                        </li>

                        <!-- Why Jakarta Dropdown -->
                        <li class="nav-item dropdown d-flex align-items-center fw-medium" style="font-size: 11px;">
                            <a class="nav-link text-dark dropdown-toggle" href="/why" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                WHY JAKARTA
                            </a>
                            <ul class="dropdown-menu opacity-75">
                                <li><a class="dropdown-item" href="#">Demographic Strength</a></li>
                                <li><a class="dropdown-item" href="/investment">Investment and Realization</a></li>
                                <li><a class="dropdown-item" href="#">Demography</a></li>
                                <li><a class="dropdown-item" href="/labor">Labor</a></li>
                            </ul>
                        </li>

                        <!-- Opportunities Dropdown -->
                        <li class="nav-item dropdown d-flex align-items-center fw-medium" style="font-size: 11px;">
                            <a class="nav-link text-dark dropdown-toggle" href="/oppurtunity" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                OPPORTUNITIES
                            </a>
                            <ul class="dropdown-menu opacity-75">
                                <li><a class="dropdown-item" href="#">Economic Data</a></li>
                                <li><a class="dropdown-item" href="#">Potential Sectors</a></li>
                                <li><a class="dropdown-item" href="/file">Potential Projects</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="/media" style="font-size: 11px;">
                                MEDIA AND EVENT
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="/about" style="font-size: 11px; padding: 6px 12px;">
                                ABOUT JIC
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/contact" style="background-color: #c7a56a; border-radius: 10px; border: none; color: #fff; padding: 4px 10px; font-size: 11px; text-decoration: none;">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#" style="font-size: 16px; padding: 6px 8px;">
                                <i class="bi bi-search"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#" style="font-size: 16px; padding: 6px 8px;">
                                <i class="bi bi-translate"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- end navbar -->

    <main class="main"></main>

    <nav id="navmenu" class="navmenu">
        </li>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="assets/img/hero-carousel/image_jkt_1.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2>Welcome to Jakarta Geospatial Investment Model<br></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#featured-services" class="btn-get-started rounded-pill">Start Using Maps</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/image_jkt_2.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2>Welcome to Jakarta Geospatial Investment Model</h2>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                        <a href="#featured-services" class="btn-get-started rounded-pill">Start Using Maps</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/image_jkt_3.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2>Welcome to Jakarta Geospatial Investment Model</h2>
                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                        <a href="#featured-services" class="btn-get-started rounded-pill">Start Using Maps</a>
                    </div>
                </div>


                <ol class="carousel-indicators"></ol>
            </div>
        </section><!-- /Hero Section -->


        <!-- Portfolio Section -->
        <section id="about us" class="about us section">

            <!-- Section Title -->
            <div class="container section-title " data-aos="fade-up">
                <h2>About Us</h2>
                <p>Jakarta Investment Model</p>
            </div><!-- End Section Title -->
            <div class="content-us">
                <div class="container pt-3 pb-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus fugiat fuga molestias atque facilis accusamus Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, accusantium. Asperiores harum sequi fugiat officiis.</p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="assets/img/hero-carousel/image_jkt_1.jpg" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>Jakarta Investment Model</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="slider-section" data-aos="fade-up">
                    <div class="slider-wrapper" id="sliderWrapper">
                        <!-- Cards dirender oleh JS -->
                    </div>
                    <div class="slider-dots" id="sliderDots"></div>
                </div>
            </div>

        </section><!-- /Portfolio Section -->
    </main>


    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Sailor</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Sailor</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>