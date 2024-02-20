<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title> @yield('title') | CODEARIF  </title>


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">

    @stack('css')

</head>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('user/js/click-scroll.js') }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>

    {{-- font awesome icon cdn --}}
    <script src="https://kit.fontawesome.com/c8bb01c38c.js" crossorigin="anonymous"></script>

</body>

</html>
