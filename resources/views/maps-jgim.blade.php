<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maps Jakarta Geospatial Investment Model</title>

    <!-- LINK PARTIAL BOOSTRAP -->
    @include('link-partial')

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .map-container {
            width: 100%;
            height: 100vh;
        }

        .map-container iframe {
            padding-top: 70px;
            width: 100%;
            height: 99%;
            border: none;
        }
    </style>

</head>

<!-- navbar -->
<nav class="navbar navbar-expand-lg position-fixed top-0 start-0 w-100" style="z-index: 9999;">
    <div class="container-fluid px-5 d-flex align-items-center justify-content-between">

        <!-- Logo Section -->
        <div class="logo d-inline-flex align-items-center p-2 bg-white shadow-sm gap-2 rounded-pill">
            <img src="{{ asset('assets/img/logo-navbar/logo_dpmptsp.png') }}" class="logo-img img-fluid" alt="logo_dpmptsp" style="max-width: 15px;">
            <img src="{{ asset('assets/img//logo-navbar/logo_jic.png') }}" class="logo-img img-fluid" alt="logo_jic" style="max-width: 20px;">
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

<body>

    <div class="map-container">

        <iframe
            id="mapFrame"
            src="https://gis-dpmptsp.jakarta.go.id/arcgisportal/apps/experiencebuilder/experience/?id=7e404c0412b74b239b8c7f6afaccb30d"
            loading="lazy"
            referrerpolicy="no-referrer">
        </iframe>

    </div>

</body>

</html>
