<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NEXUS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/style.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('public/web-assets/swiper/swiper-bundle.min.css') }}">

    <style>
        .parsley-errors-list {
            margin: 2px 0px 3px;
            padding: 0px;
            list-style-type: none;
            color: red;
        }
    </style>


</head>

<body>

    {{-- @include('web-side.setup.search') --}}


    @include('web-side.setup.header')
    @yield('content')
    @include('web-side.setup.footer')

    <!-- jQuery -->
    <script src="{{ asset('public/assets/js/jquery-3.5.1.min.js') }}"></script>

    <!-- bootetrap -->
    <script src="{{ asset('public/web-assets/js/bootstrap.js') }}"></script>
    <!-- swiper -->
    <script src="{{ asset('public/web-assets/swiper/swiper-bundle.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('public/web-assets/js/main.js') }}"></script>
    {{-- Parseley JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    {{-- Validaton --}}
    <script src="{{ asset('public/assets/js/validation.js') }}"></script>

</body>

</html>
