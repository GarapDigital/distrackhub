<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Distrackhub</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontside/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontside/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontside/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontside/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontside/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontside/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontside/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backside/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontside/vendor/iziToast/dist/css/iziToast.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontside/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <main id="main">
        @yield('content')
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('backside/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('frontside/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontside/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontside/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontside/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontside/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontside/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontside/vendor/iziToast/dist/js/iziToast.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('frontside/js/main.js') }}"></script>

</body>

</html>
