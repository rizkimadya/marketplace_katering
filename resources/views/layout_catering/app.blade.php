<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_catering/images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_catering/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_catering/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assets_catering/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_catering/css/style.css') }}" rel="stylesheet">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">


    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-style: none;
        }

        #myTable_wrapper .row {
            margin-bottom: 10px;
        }

        .dataTables_length {
            display: flex;
        }

        .dataTables_length label {
            display: flex;
            gap: 10px;
        }

        .dataTables_length label select {
            width: 60px;
        }

        .dataTables_filter label {
            display: flex;
        }

        .ck.ck-editor {
            color: #000;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0px;
            margin-left: 10px;
        }

        .dataTables_wrapper .pagination {
            margin-bottom: 0px;
        }

        .dataTables_wrapper .pagination .page-item .page-link {
            padding: 6px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layout_catering.navbar')

        @include('layout_catering.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('modal-button')
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets_catering/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets_catering/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets_catering/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('assets_catering/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets_catering/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('assets_catering/vendor/circle-progress/circle-progress.min.js') }}"></script>

    <script src="{{ asset('assets_catering/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('assets_catering/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets_catering/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets_catering/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('assets_catering/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets_catering/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets_catering/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ asset('assets_catering/js/dashboard/dashboard-1.js') }}"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            },
        })
        .catch(error => {
            console.error(error);
        });
</script>

</body>

</html>
