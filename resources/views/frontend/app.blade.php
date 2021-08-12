<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chelsea Nepal</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/3dslider.css') }}" rel="stylesheet">
</head>

<body class="game_info" data-spy="scroll" data-target=".header">

    <div id="preloader">
        <img class="preloader" src="images/tenor-2.gif" alt="">
    </div>

    <section id="top">
        @include('frontend.partials.navbar')
        @include('frontend.components.homeBannerSlide')
    </section>

    @yield('main-content')

    @include('frontend.partials.footer')
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://www.jqueryscript.net/css/jquerysctipttop.css"></script>
    <script src="{{ asset('js/3dslider.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
