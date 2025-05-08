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
    <script src="{{ asset('/js/leaflet.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet">
    <script>
        const tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        const icons = [];
        for (let i = 0; i <= 6; i++) {
            icons[i] = L.icon({
                iconUrl: `{{ asset('images/mapicons/${i}.png') }}`,
                shadowUrl: '',
                iconSize: [40, 40],
                iconAnchor: [0, 0]
            });
        }

        const markers = [];
        markers.push(L.marker([51.75971633544925, 19.472233617747424], {icon: icons[0]}).bindPopup('Inwestycja'));

        @foreach($markers as $m)
        markers.push(L.marker([{{ $m->lat }}, {{ $m->lng }}], {icon: icons[{{ $m->group_id }}]}).bindPopup('{{ $m->name }}'));
        @endforeach

        const featureGroup = L.featureGroup(markers);

        const mapDiv = document.getElementById("map");
        let map = new L.Map(mapDiv, {
            center: [0, 0],
            zoom: 0,
            layers: [tileLayer, featureGroup]
        });

        map.fitBounds(featureGroup.getBounds(), {
            padding: [50, 50]
        });

        map.on('popupclose', function () {
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        });

        function debounce(func) {
            let timer;
            return function (event) {
                if (timer) clearTimeout(timer);
                timer = setTimeout(func, 100, event);
            };
        }

        window.addEventListener("resize", debounce(function (e) {
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }));

        const alwaysIncludedMarker = L.marker([51.74445857171649, 19.487093873682273], {icon: icons[0]}).bindPopup('Inwestycja');

        // Function to filter markers
        function filterMarkers(group) {
            featureGroup.clearLayers();
            featureGroup.addLayer(alwaysIncludedMarker);
            markers.forEach(marker => {
                if (group === null || marker.options.icon.options.iconUrl.includes(`/${group}.png`)) {
                    featureGroup.addLayer(marker);
                }
            });
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }

        // Add click event listeners to the divs
        document.querySelectorAll('.map__legend').forEach(div => {
            div.addEventListener('click', function() {
                const group = this.getAttribute('data-group');
                filterMarkers(group);
            });
        });

        // Optionally add a reset button to show all markers
        const resetButton = document.getElementById('resetButton');
        if (resetButton) {
            resetButton.addEventListener('click', function() {
                filterMarkers(null);
            });
        }
    </script>
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
