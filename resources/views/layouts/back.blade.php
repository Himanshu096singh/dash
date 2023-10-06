<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://demos.pixinvent.com/apex-html-admin-template/app-assets/img/ico/favicon.ico">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/fonts/simple-line-icons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/css/switchery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/vendors/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('back/vendors/css/datatables/dataTables.bootstrap4.min.css') }}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/themes/layout-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/plugins/switchery.min.css') }}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/pages/dashboard1.min.css') }}">
    <style>
        .card-header .card-title{
            display: inline;
        }
        .card-header a:hover{
            color: white;
        }
        td.inlinebtn{
            display: inline-flex;
        }
        .modal-backdrop{
            display:none;
        }
        .modal-dialog{
            margin-top:150px;
        }
        .note-icon-arrows-alt{
            display:none;
        }
        .form-control{color: #272727 !important;}
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns navbar-sticky" data-col="2-columns" data-menu="vertical-menu">
    @include('layouts.include.header')
    <div class="wrapper">
        @include('layouts.include.sidebar')
        <div class="main-panel">
            @yield('content')
            @include('layouts.include.footer')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('back/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('back/vendors/js/switchery.min.js') }}"></script>
    <script src="{{ asset('back/vendors/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('back/vendors/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('back/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('back/js/core/app.min.js') }}"></script>
    <script src="{{ asset('back/js/notification-sidebar.min.js') }}"></script>
    <script src="{{ asset('back/js/customizer.min.js') }}"></script>
    <script src="{{ asset('back/js/scroll-top.min.js') }}"></script>
    <script src="{{ asset('back/js/select2.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.5.1/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description', {
            filebrowserUploadUrl: "{{route('ckupload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
        function DeleteConfirmation(){
            var result = confirm('Are you sure want to delete this?');
            if(result == true){
                return true;
            }else{
                return false;
            }
        }
    </script>
    @if (Session::has('success'))
        <script>
            Swal.fire( {
                position: "top-end",
                type:"success",
                title:"{{ Session::get('success') }}",
                showConfirmButton:!1,
                timer:1500,
                buttonsStyling:!1
            });
        </script>
    @elseif(Session::has('error'))
        <script>
            Swal.fire({
                position: "top-end",
                type:"error",
                title:"{{ Session::get('error') }}",
                showConfirmButton:!1,
                timer:1500,
                buttonsStyling:!1
            })
        </script>
    @endif
    @yield('js')
</body>
</html>
