<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2194451574476602"
        crossorigin="anonymous"></script>
    <title>@yield('page_title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('assets/frontend/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <style>
        html {
            scroll-behavior: smooth
        }
    </style>
    @push('css')

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

        @push('js')

        </body>

        </html>
