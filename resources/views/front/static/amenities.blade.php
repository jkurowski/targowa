@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Udogodnienia</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec why-us text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Udogodnienia</h1>
                            <p class="section-header__subtitle">Apartamenty Hitower</p>
                        </div>
                        <p class="section-desc">HI TOWER to wyjątkowa inwestycja w tej części miasta – jako jedyni oferujemy apartamenty o podwyższonym standardzie, wzbogacone o nowoczesne rozwiązania, które realnie podnoszą komfort codziennego życia. To przestrzeń stworzona z myślą o tych, którzy cenią jakość, funkcjonalność i wygodę na co dzień. Wybierz komfort na własnych zasadach.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 order-1 order-lg-1 align-self-end" data-aos="fade-up" data-aos-duration="700"
                         data-aos-delay="500">
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list1.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Funkcjonalne rozkłady</p>
                                <p>W naszej ofercie znajdziesz apartamenty  2, 3 i 4 pokojowe o powierzchni użytkowej od 40 m<sup>2</sup> do 79 m<sup>2</sup></p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list2.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Świetna lokalizacja</p>
                                <p>Bliska okolica inwestycji gwarantuje dostęp do wszelkiego rodzaju udogodnień – obiektów handlowo-usługowych, placówek edukacyjnych i zdrowotnych, miejsc do rekreacji i odpoczynku oraz szerokiej oferty gastronomicznej.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list3.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Bezpieczeństwo</p>
                                <p>Teren osiedla ogrodzony i monitorowany z możliwością podglądu przez mieszkańców z systemu wideodomofonów. Drzwi wejściowe do mieszkań o podwyższonej klacie antywłamaniowej.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0 order-3 order-lg-2 position-relative align-self-end">
                        <div class="why-us__img-bg">
                            <div class="blurred-bg">
                                <img src="{{ asset('images/udogodnienia-tlo.png') }}" alt="budynek" class="img-bg" width="438" height="458" loading="lazy">
                            </div>
                        </div>
                        <img src="{{ asset('images/udogodnienia.png') }}" alt="budynek"
                             class="why-us__img d-block mx-auto" width="349" height="606" loading="lazy">
                    </div>
                    <div class="col-lg-4 order-2 order-lg-3 align-self-end" data-aos="fade-up" data-aos-duration="700"
                         data-aos-delay="500">
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list4.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Nowoczesne i komfortowe rozwiązania</p>
                                <p>Możliwość sterowania oświetleniem z jednego miejsca w każdym apartamencie, skrzynki paczkowe, wózkownia oraz rowerowania do dyspozycji mieszkańców.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list5.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Miejsca postojowe</p>
                                <p>Dwukondygnacyjna zamykana automatycznie hala garażowa z wydzielonymi komórkami lokatorskimi.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list6.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Części wspólne</p>
                                <p>Niepowtarzalny taras widokowy ze strefą wypoczynku zlokalizowany na 10 piętrze budynku oraz wysoki standard wykończenia holu wejściowego i klatek schodowych.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-pad attractions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Nasza okolica</h2>
                            <p class="section-header__subtitle">Atrakcje lokalne</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            W najbliższym sąsiedztwie naszego budynku znajduje się wiele punktów usługowych i handlowych,
                            restauracji, terenów zielonych oraz przystanków komunikacji miejskiej. Naszym największym atutem
                            jest połączenie wszystkich zalet mieszkania w centrum miasta z niezbędnym do życia spokojem - to
                            Ty wybierasz, na co masz dzisiaj ochotę
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/ksiezy-mlyn.jpg') }}" alt="KSIĘŻY MŁYN" width="320" height="393"
                                 loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">KSIĘŻY MŁYN</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd-rower.svg') }}" alt="auto">
                                <p class="attractions__box-time">5 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/palmiarnia.jpg') }}" alt="Monopolis" width="320" height="393"
                                 loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">PALMIARNIA</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd-rower.svg') }}" alt="auto">
                                <p class="attractions__box-time">7 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/park-zrodliska.jpg') }}" alt="Monopolis" width="320" height="393"
                                 loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">PARK ŹRÓDLISKA</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd-rower.svg') }}" alt="auto">
                                <p class="attractions__box-time">7 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/park-podolski.png') }}" alt="atrakcja" width="320"
                                 height="331" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Park Podolski</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd-rower.svg') }}" alt="auto">
                                <p class="attractions__box-time">3 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/monopolis.jpg') }}" alt="Monopolis" width="320" height="393"
                                 loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Monopolis</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd-rower.svg') }}" alt="auto">
                                <p class="attractions__box-time">10 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/galeria.png') }}" alt="atrakcja" width="320" height="393"
                                loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Galeria Łódzka</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">8 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/off-p.png') }}" alt="atrakcja" width="320" height="393"
                                loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Off Piotrkowska</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">11 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/planetarium.png') }}" alt="atrakcja" width="320"
                                height="393" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Planetarium EC1</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">10 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-5 mb-xl-4">
                        <div class="attractions__box">
                            <img src="{{ asset('images/politechnika.png') }}" alt="atrakcja" width="320"
                                height="393" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Politechnika Łódzka</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">12 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-sec text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Lokalizacja</h2>
                            <p class="section-header__subtitle">Poznaj naszą okolicę</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Nasza inwestycja zlokalizowana jest przy Księżym Młynie, dzięki czemu przyszli mieszkańcy Hi Tower będą mogli korzystać ze wszystkich udogodnień z tym związanych. Atrakcyjna lokalizacja to najważniejsza kwestia podczas wyboru idealnego apartamentu. Warto zainwestować w rozwojową okolicę, która zapewni Ci komfortowe i wygodne życie.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center" data-group="1">
                                    <img src="{{ asset('images/zakupy.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>zakupy</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="2">
                                    <img src="{{ asset('images/edukacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>edukacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="3">
                                    <img src="{{ asset('images/zdrowie.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>zdrowie</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center" data-group="4">
                                    <img src="{{ asset('images/rekreacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>rekreacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="5">
                                    <img src="{{ asset('images/komunikacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>komunikacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="6">
                                    <img src="{{ asset('images/rozrywka.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"><p>rozrywka</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 mb-sm-4 mb-lg-0">
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">5 min</b><p>Księży Młyn</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">3 min</b><p>Park Podolskiego</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">7 min</b><p>Park Źródliska Palmiarnia</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">10 min</b><p>Monopolis</p>
                            </div>
                        </div>
                        <div class="row mt-0 mt-sm-5">
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">8 min</b><p>Galeria Łódzka</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">11 min</b><p>Off Piotrkowska</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">10 min</b><p>Centrum Nauki i Techniki EC1</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">12 min</b><p>Politechnika Łódzka</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2 mt-sm-0">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>

        <x-cta></x-cta>
    </main>
@endsection
@push('scripts')
<style>
    .leaflet-marker-icon {
        border-radius: 50%;
    }
</style>
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
            iconAnchor: [20, 32]
        });
    }

    const markers = [];
    markers.push(L.marker([51.74445857171649, 19.487093873682273], {icon: icons[0]}).bindPopup('Inwestycja'));

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
@endpush
