@include('link-partial')

<body class="index-page">

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
                    <img src="assets/img/img-jkt-about.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2>Welcome to Jakarta Geospatial Investment Model<br></h2>
                        <p>Welcome to the future of investment and integrated services, designed to support Jakarta's rise as a global city. Our digital twin platform empowers you with real-time insights, predictive modeling, and streamlined permitting solutions.</p>

                        <div class="text-center mt-2">
                            <a href="/maps-jgim"
                                class="btn btn-primary btn-maps rounded px-2 py-1 fs-7"
                                onclick="openMap()">
                                Start Using Maps
                            </a>
                        </div>

                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/image_jkt_2.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2>Welcome to Jakarta Geospatial Investment Model</h2>
                        <p>Welcome to the future of investment and integrated services, designed to support Jakarta's rise as a global city. Our digital twin platform empowers you with real-time insights, predictive modeling, and streamlined permitting solutions.</p>

                        <div class="text-center mt-2">
                            <a href="/maps-jgim"
                                class="btn btn-primary btn-maps rounded px-2 py-1 fs-7"
                                onclick="openMap()">
                                Start Using Maps
                            </a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero-carousel/image_jkt_3.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2>Welcome to Jakarta Geospatial Investment Model</h2>
                        <p>Welcome to the future of investment and integrated services, designed to support Jakarta's rise as a global city. Our digital twin platform empowers you with real-time insights, predictive modeling, and streamlined permitting solutions.</p>

                        <div class="text-center mt-2">
                            <a href="/maps-jgim"
                                class="btn btn-primary btn-maps rounded px-2 py-1 fs-7"
                                onclick="openMap()">
                                Start Using Maps
                            </a>
                        </div>
                    </div>
                </div>


                <ol class="carousel-indicators"></ol>
            </div>
        </section><!-- /Hero Section -->


        <!-- slider  section -->
        <section id="about us" class="about us section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Of</h2>
                <p>Jakarta Geospatial Investment Model</p>
            </div><!-- End Section Title -->
            <div class="content-us" data-aos="fade-up">
                <div class="container pt-3 pb-5">
                    <div class="row align-items-center">
                        <div class=" about-us col-lg-6 col-md-6 mx-auto" style="text-align: justify; max-width:700px;" data-aos="fade-up">
                            <p>
                                This platform is an integrated solution designed to support investment, urban planning, and sustainable development in Jakarta as the city evolves into a modern global hub. By leveraging digital twin technology, it provides a dynamic digital representation of the city, allowing users to access real-time insights, conduct predictive analyses, and identify development opportunities across various sectors.
                                In addition, the platform streamlines permitting and investment services, making processes more transparent, efficient, and accessible for investors, businesses, and related parties.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="assets/img/hero-carousel/image_jkt_1.jpg" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /about us section -->


        <!-- slider  section -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Feature Of</h2>
            <p>Jakarta Geospatial Investment Model</p>
        </div><!-- End Section Title -->


        </section><!-- /slider section -->
    </main>

    <section class=" content py-5">
        <div class="container">

            <!-- Existing -->
            <div class="row align-items-center mb-5" data-aos="fade-up">

                <div class="col-lg-4">
                    <img src="assets/img/feature/existing.jpeg"
                        class="img-fluid rounded-4 shadow"
                        style="max-width:260px;">
                </div>

                <div class="col-lg-8">
                    <h4 class="fw-bold">Existing</h4>
                    <p style="text-align: justify;">
                        Users can access a detailed three-dimensional schematic representation of Jakarta’s current buildings and infrastructure systems. This feature allows users to observe the city’s present architectural and spatial conditions with greater clarity, providing an accurate context for understanding how different districts are structured and how urban activities are distributed throughout the metropolitan area.
                        Through this visualization, users can better evaluate the existing urban form, identify patterns of development, and gain insights into how Jakarta’s infrastructure supports economic and social activities across the city.
                    </p>
                </div>

            </div>

            <!-- Spatial Analysis -->
            <div class="row align-items-center mb-5" data-aos="fade-up">

                <div class="col-lg-8 order-lg-1 order-2">
                    <h4 class="fw-bold">Spatial Analysis</h4>
                    <p style="text-align: justify;">
                        This mode further enhances the platform by enabling access to a wide range of spatial data analyses. Through this feature, users can examine important urban indicators such as land utilization patterns, zoning characteristics, and the distribution of public infrastructure.
                        These analytical capabilities provide deeper insights into the spatial dynamics of Jakarta’s districts, allowing users to identify areas with high development potential, infrastructure gaps, or strategic investment opportunities.
                        By integrating spatial datasets with analytical tools, this mode supports evidence-based decision-making and helps stakeholders evaluate the feasibility and sustainability of potential development projects within specific locations.
                    </p>
                </div>

                <div class="col-lg-4 text-lg-end order-lg-2 order-1">
                    <img src="assets/img/feature/spatial analysis.jpg"
                        class="img-fluid rounded-4 shadow"
                        style="max-width:260px;">
                </div>

            </div>

            <!-- Development Plan -->
            <div class="row align-items-center mb-5" data-aos="fade-up">

                <div class="col-lg-4">
                    <img src="assets/img/feature/development plan.jpg"
                        class="img-fluid rounded-4 shadow"
                        style="max-width:260px;">
                </div>

                <div class="col-lg-8">
                    <h4 class="fw-bold">Development Plan</h4>
                    <p style="text-align: justify;">
                        presents a forward-looking schematic model that integrates proposed development initiatives, future infrastructure projects, and long-term urban planning strategies envisioned for Jakarta. This feature allows users to explore how the city is expected to evolve over time, highlighting areas targeted for redevelopment, infrastructure expansion, and new investment opportunities. By visualizing these future plans within the broader spatial framework of the city, users can better understand how upcoming projects may influence urban growth, economic activity, and regional connectivity. This forward-looking perspective is particularly valuable for investors and policymakers seeking to align their strategies with Jakarta’s broader vision for sustainable development, economic competitiveness, and modern urban transformation.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" fill="white">
            <path d="M342.6 105.4C330.1 92.9 309.8 92.9 297.3 105.4L137.3 265.4C124.8 277.9 124.8 298.2 137.3 310.7C149.8 323.2 170.1 323.2 182.6 310.7L320 173.3L457.4 310.6C469.9 323.1 490.2 323.1 502.7 310.6C515.2 298.1 515.2 277.8 502.7 265.3L342.7 105.3zM502.6 457.4L342.6 297.4C330.1 284.9 309.8 284.9 297.3 297.4L137.3 457.4C124.8 469.9 124.8 490.2 137.3 502.7C149.8 515.2 170.1 515.2 182.6 502.7L320 365.3L457.4 502.6C469.9 515.1 490.2 515.1 502.7 502.6C515.2 490.1 515.2 469.8 502.7 457.3z" />
        </svg>
    </a>
    <!-- PARTIAL LINK JS  -->
    @include('script-partial')



</body>
