<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NEXUS</title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/img/logo/logo.png') }}"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/assets/css/accounts-style.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/line-awesome.min.css') }}">


    {{-- Custom Datatables --}}
    <!-- Datatable CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/dataTables.bootstrap4.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/toastr.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('public/assets/select/bootstrap-select.css') }}">

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

    <div class="main-wrapper">

        @yield('content')
        {{-- Loader --}}

        <div id="loader-wrapper">
            <div id="loader">
                <div class="loader-ellips">
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                </div>
            </div>
        </div>
        {{-- Loader --}}
        @include('setup.header')
        @include('setup.sidebar')
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('public/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('public/assets/js/jquery.slimscroll.min.js') }}"></script>
    <!-- Select2 JS -->
    <script src="{{ asset('public/assets/js/select2.min.js') }}"></script>
    <!-- Toaster JS -->
    <script src="{{ asset('public/assets/js/toastr.min.js') }}"></script>
    <!-- Datatable JS -->
     {{-- Custom Datatables --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    {{-- <script src="{{ asset('public/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/dataTables.bootstrap4.min.js') }}"></script> --}}
    <!-- Custom JS -->
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('public/assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/line-chart.js') }}"></script>

    {{-- Parseley JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    @yield('scripts')
    <!-- CDN for Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('public/assets/js/validation.js') }}"></script>


</body>
</html>
