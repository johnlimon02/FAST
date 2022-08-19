<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('shopowner/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('shopowner/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('shopowner/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
</head>
<body id="page-top">

    <div id="wrapper">

        @include('layouts.incAdmin.admin-sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.incAdmin.admin-navbar')
                @yield('content')
            </div>
            
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('shopowner/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('shopowner/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('shopowner/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('shopowner/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('shopowner/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('shopowner/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('shopowner/js/demo/chart-pie-demo.js') }}"></script>

</body>
</html>