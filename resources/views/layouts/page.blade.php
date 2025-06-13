<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {!! settings()->get('scripts_head') !!}

    <title>
        @hasSection('seo_title')
            @yield('seo_title')@else{{ settings()->get('page_title') }} - @yield('meta_title')
        @endif
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="@hasSection('seo_description')
@yield('seo_description')@else{{ settings()->get('page_description') }}
@endif">
    <meta name="robots"
        content="@hasSection('seo_robots')
@yield('seo_robots')@else{{ settings()->get('page_robots') }}
@endif">
    <meta name="author" content="{{ settings()->get('page_author') }}">

    @hasSection('opengraph')
        @yield('opengraph')
    @endif
    @hasSection('schema')
        @yield('schema')
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Prefetching --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"></noscript>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}?v=13062025">

    @stack('style')

</head>

<body class="pagebody {{ !empty($body_class) ? $body_class : '' }}">
    {!! settings()->get('scripts_afterbody') !!}

    <div id="pagecontent">
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
    </div>

    @include('layouts.partials.cookies')

    @auth
        @include('layouts.partials.inline')
    @endauth

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

    @stack('scripts')

    {!! settings()->get('scripts_beforebody') !!}

</body>

</html>
