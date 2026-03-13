 <div class="container d-flex justify-content-center pt-4 pb-3" data-aos="fade-up">
     <div class="menu-container" id="menu">
         <div class="slider" id="slider"></div>
         <button class="menu-item">Existing</button>
         <button class="menu-item">Spatial Analysis</button>
         <button class="menu-item">Development Plan</button>
     </div>
 </div>

 <div class="container pb-4">

     <div class="slider-section" data-aos="fade-up">
         <div class="slider-wrapper" id="sliderWrapper">
             <!-- Cards dirender oleh JS -->
         </div>
         <div class="slider-dots" id="sliderDots"></div>
     </div>
 </div>


 <!-- navbar -->
 <nav class="navbar navbar-expand-lg position-fixed top-0 start-0 w-100" style="z-index: 9999;">
     <div class="container-fluid px-5 d-flex align-items-center justify-content-between">

         <!-- Logo Section -->
         <div class="logo d-inline-flex align-items-center p-2 bg-white shadow-sm gap-2 rounded-pill">
             <img src="{{ asset('assets/img/logo-navbar/logo_dpmptsp.png') }}" class="logo-img img-fluid" alt="logo_dpmptsp" style="max-width: 15px;">
             <img src="{{ asset('assets/img/logo-navbar/logo_jic.png') }}" class="logo-img img-fluid" alt="logo_jic" style="max-width: 20px;">

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


 <footer id="footer" class="footer dark-background" data-aos="fade-up">

     <div class=" container footer-top">
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
                     <li><a href="#">jif 2025</a></li>
                     <li><a href="#">why</a></li>
                     <li><a href="#">About us</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">about</a></li>
                     <li><a href="#">investment tools</a></li>
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
