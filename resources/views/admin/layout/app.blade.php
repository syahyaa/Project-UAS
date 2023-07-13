<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/assets/vendor/bootstrap-icons/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/assets/vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/assets/css/style.css') }}">
    <link href="{{ asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    
</head>

<body class="sb-nav-fixed">
    @include('admin.layout.top')
    <div id="layoutSidenav_content">
        @include('admin.layout.menu')
        <div id="layoutSidenav_content">
            <main id="main">
                <div class="container-fluid px-4">
                    <!-- ini untuk content atau main -->
                    @yield('content')
                </div>
            </main>
            @include('admin.layout.bottom')
        </div>
    </div>



    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/php-email-form/validate.js') }}"></script>
</body>

</html>
