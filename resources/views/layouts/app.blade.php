<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('back/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/fonts/simple-line-icons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/css/switchery.min.css') }}"> --}}
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/themes/layout-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/plugins/switchery.min.css') }}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" href="{{ asset('back/css/pages/authentication.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/style.css') }}">
    <!-- END: Custom CSS-->
</head>
<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('back/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('back/vendors/js/switchery.min.js') }}"></script>
    <script src="{{ asset('back/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('back/js/core/app.min.js') }}"></script>
    <script src="{{ asset('back/js/notification-sidebar.min.js') }}"></script>
    <script src="{{ asset('back/js/customizer.min.js') }}"></script>
    <script src="{{ asset('back/js/scroll-top.min.js') }}"></script>
</body>
</html>
