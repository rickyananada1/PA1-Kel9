<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Alu -Alu Of Sitoluama - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.') }}'" rel="icon" />
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css" rel="stylesheet') }}" />
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />

    <!--style untuk tag agar ada jaraknya-->
    <style>
        .tag {
            border-radius: 20px;
            padding: 5px 1px;
            margin-right: 1px;
            display: inline-block;

        }

        .tag h4 {
            margin: 0;
        }
    </style>
    <!--style untuk biar  ada box di category layanan -->

    <style>
        .category-box {

            padding: 4px;
            background-color: yellowgreen;
            border-radius: 2px;
        }

        .category {
            color: white;
            font-style: italic;
            text-align: center;
            font-size: 130%;

        }
    </style>

    <!--CSS UNTUK FORM ALU ALU-->
    <style>
        .footer-newsletter h4 {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-newsletter p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .footer-newsletter form {
            margin-top: 20px;
        }

        .footer-newsletter form input[type="text"],
        .footer-newsletter form textarea {
            box-sizing: border-box;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 100%;
            margin-bottom: 20px;
        }

        .footer-newsletter form input[type="text"]:focus,
        .footer-newsletter form textarea:focus {
            border-color: #18d26e;
        }

        .footer-newsletter form button[type="submit"] {
            background-color: #18d26e;
            color: #fff;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .footer-newsletter form button[type="submit"]:hover {
            background-color: #13a456;
        }
    </style>



</head>

<body>
    <!-- ======= Header ======= -->
    @include('frontend.bodyhome.header')
    <!-- End Header -->


    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.bodyhome.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
