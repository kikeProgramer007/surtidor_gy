<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- autocomplete de venta -->
    <script src="{{ asset('/vendor/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/vendor/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <link href="{{ asset('/vendor/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
    <!-- / autocomplete de venta -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('/vendor/dist/css/css.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/vendor/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/dist/css/boton.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- CSS PARA EL INPUT DATE Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- ChartJS -->
    <script src="{{ asset('/vendor/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- <body class="font-sans antialiased"> --}}

<body class="layout-fixed sidebar-mini-md layout-navbar-fixed">

    <!-- Site wrapper -->
    <div class="wrapper">

        {{-- <div class="min-h-screen bg-gray-100"> --}}
        <div class="">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header>
                    {{ $header }}
                </header>
            @endisset

            <!-- Page Content -->
            <main >
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
             
            </main>
            {{-- </div> --}}

            <footer class="main-footer text-sm">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 2.0.1-rc
                </div>
                <strong>Copyright &copy; 2022 <a href="https://www.facebook.com/EnriquePlayer"
                        target="_blank">kike_programmer</a>.</strong> Todos los derechos reservados.
            </footer>

        </div><!-- ./wrapper -->
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- SweetAlert2 -->
        <script src="{{ asset('/vendor/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/vendor/dist/js/adminlte.min.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('/vendor/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('/vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <!-- jquery-validation -->
        <script src="{{ asset('/vendor/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/vendor/plugins/jquery-validation/additional-methods.min.js') }}"></script>
        <!-- bs-custom-file-input photo-->
        <script src="{{ asset('/vendor/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <!-- Plantilla principal -->
        <script src="{{ asset('/vendor/dist/js/plantilla.js') }}"></script>
        <!-- ========================= JS PARA EL DATA FECHA ========================= -->
        <!-- Select2 -->
        <script src="{{ asset('/vendor/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ asset('/vendor/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('/vendor/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('/vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>


</body>

</html>
