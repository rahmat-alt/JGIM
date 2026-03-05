<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JakBizHub</title>
    <!-- ======================link partial css investment-maps==================== -->
    @include('layouts.landing_page.link-partial')


</head>

<body>

    <link rel="stylesheet" href="{{ asset('investment-maps/package/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('investment-maps/jakbizhub.css') }}">

    <div class="map-container">
        <iframe
            id="mapFrame"
            src="https://pelayanan.jakarta.go.id/kemudahan-berusaha/invest.html"
            loading="lazy"
            referrerpolicy="no-referrer"
            frameborder="0">
        </iframe>
    </div>
</body>

</html>