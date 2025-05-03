<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {!! settings()->get('scripts_head') !!}

    <title>{{ settings()->get('page_title') }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get('page_description') }}">
    <meta name="robots" content="{{ settings()->get('page_robots') }}">
    <meta name="author" content="{{ settings()->get('page_author') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    {{-- Prefetching --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"></noscript>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    @stack('style')
</head>

<body class="{{ !empty($body_class) ? $body_class : '' }}">
    {!! settings()->get('scripts_afterbody') !!}

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.cookies')

    <!-- Styles -->

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

    @if (settings()->get('popup_status') == 1)
        <div class="modal" tabindex="-1" id="popModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {!! settings()->get('popup_text') !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script type="text/javascript">
        $(document).ready(function() {
            $("#slider ul").responsiveSlides({
                auto:true,
                pager:false,
                nav:true,
                timeout:8000,
                random:false,
                speed: 500
            });

            @if (settings()->get('popup_status') == 1)
                const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                    keyboard: false
                });
            @endif
            @if ($popup == 1)
                popModal.show();
                setTimeout(function() {
                    popModal.hide();
                }, {{ settings()->get('popup_timeout') }});
            @endif
        });
    </script>
    {!! settings()->get('scripts_beforebody') !!}
</body>
</html>
