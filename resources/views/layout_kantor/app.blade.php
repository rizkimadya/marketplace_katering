<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('kantor/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('kantor/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('kantor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('kantor/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('kantor/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('kantor/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('kantor/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('kantor/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('kantor/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('kantor/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('kantor/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('kantor/css/style.css') }}">

</head>

<body>
    @include('sweetalert::alert')
    @include('layout_kantor.navbar')
    <!-- END nav -->

    <section class="content">
        @yield('content')
    </section>

    @include('layout_kantor.footer')


    <script src="{{ asset('kantor/js/jquery.min.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('kantor/js/popper.min.js') }}"></script>
    <script src="{{ asset('kantor/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('kantor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('kantor/js/aos.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('kantor/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('kantor/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('kantor/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('kantor/js/google-map.js') }}"></script>
    <script src="{{ asset('kantor/js/main.js') }}"></script>


</body>

</html>
