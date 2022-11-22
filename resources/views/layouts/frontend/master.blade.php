<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('assets/frontend/images/collected/fav_icon.ico') }}" rel="icon">
    <link href="{{ asset('assets/frontend/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles/animate.css')}}" />


    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <style>
        html {
            scroll-behavior: smooth
        }
    </style>
    @stack('css')

</head>

<body id="top">

    @include('layouts.frontend.header')

    <main id="main">

        @yield('main_section')

    </main>

    @include('layouts.frontend.footer')

    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

    <script src="{{ asset('assets/frontend/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery_lazy/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery_lazy/jquery.lazy.plugins.min.js') }}"></script>

    @stack('js')

</body>

</html>
