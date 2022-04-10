<!DOCTYPE html>

    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title', app_name())</title>
            <meta name="description" content="@yield('meta_description', 'CMSIR')">
            <meta name="author" content="@yield('meta_author', 'Akhtar Khan')">
            @yield('meta')

            <!-- @stack('before-styles') -->

            <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >

            <!-- Favicon -->
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/images/favicon.ico') }}" />

            <!-- bootstrap.min css -->
            <link href="{{ asset('theme/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

            <!-- Icon Font Css -->
            <link href="{{ asset('theme/plugins/icofont/icofont.min.css') }}" rel="stylesheet" type="text/css" >

            <!-- Slick Slider  CSS -->
            <link href="{{ asset('theme/plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet" type="text/css" >
            <link href="{{ asset('theme/plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" >
            <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" type="text/css" >

            <!-- @stack('after-styles') -->
        </head>

        <body id="top">
            @include('frontend.includes.header')

        <div>
            @yield('content')
        </div>
        
        {{-- footer --}}

        @include('frontend.includes.footer')
    </body>
</html>
