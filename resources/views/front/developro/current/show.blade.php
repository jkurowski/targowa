@extends('layouts.page', ['body_class' => 'current-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="position-relative">
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item"><a href="/inwestycje-zrealizowane/">Inwestycje w sprzedaży</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $investment->name }}</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="first-sec sales-investments sec-pad radial-bg-2">
            <div class="position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="section-header mb-3">
                                <p class="section-header__subtitle">{{ $investment->city }}</p>
                                <h1 class="section-header__title">{{ $investment->name }}</h1>
                            </div>
                            <div class="desc-anim">
                                <div class="inner-html mb-5">
                                    {!! $investment->content !!}
                                </div>
                                <a href="{{ route('front.developro.investment.index', $investment->slug) }}" class="project-btn">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('images/ow-page.png') }}" class="hero-slider__img photo-anim" width="1180" height="500" alt="osiedle" loading="eager">
                <div  class="hero-slider__img-et">
                    <p class="hero-slider__img-et-title">Osiedle wygodne</p>
                    <p class="hero-slider__img-et-desc">98,53 m2 / 4 pokoje</p>
                </div>
            </div>
        </section>
        
        <section class="advantages sec-pad-big radial-bg-2 radial-right">
            <div class="position-relative">
                <div class="container">
                    <div class="row">
                        @foreach($sections as $s)
                            @if($s->id == 1)
                                <div class="col-xl-6 ms-auto">
                                    <div class="section-header text-center text-sm-end mb-3">
                                        <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">{{ $s->modaleditor }}</p>
                                        <h2 class="section-header__title"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">{{ $s->modaltytul }}</h2>
                                    </div>
                                    <div class="w-80-right">
                                        <div class="text-center text-sm-end inner-html" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                                            {!! $s->modaleditortext !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="container-slider-left sec-pad">
                    <div class="position-relative">
                        <img src="img/ow-tlo.jpg" alt="zdjęcie inwestycji" class="advantages__img-bg" width="550" height="600" loading="lazy">
                        <div class="slider advantages-slider">
                            <div>
                                <div class="advantages-slider__photo">
                                    <img class="" src="img/atuty2.jpg" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                </div>
                            </div>
                            <div>
                                <div class="advantages-slider__photo">
                                    <img class="" src="img/atuty2.jpg" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                </div>
                            </div>
                            <div>
                                <div class="advantages-slider__photo">
                                    <img class="" src="img/atuty1.jpg" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="gallery project-tabs sec-pad-big radial-bg-2">
            <div class="container mt-4">
                <div class="section-header text-center mb-3">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Osiedle Wygodne</p>
                    <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Galeria zdjęć</h2>
                </div>
            </div>
            <div class="container">
                <ul class="nav nav-tabs" id="galleryTab" role="tablist">
                    @foreach($galleries as $key => $g)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($key == 0) active @endif" id="gallery{{ $g->id }}-tab" data-bs-toggle="tab" data-bs-target="#gallery{{ $g->id }}" type="button" role="tab" aria-controls="gallery{{ $g->id }}" aria-selected="true">
                                <img src="{{ asset('uploads/gallery/'.$g->file) }}" alt="Ikonka galerii {{ $g->name }}" loading="lazy">
                                <span>Wizualizacja</span>
                                <strong>{{ $g->name }}</strong>
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="container">
                <div class="tab-content" id="galleryTabContent">
                    @foreach($galleries as $key => $g)
                    <div class="tab-pane @if($key == 0) active @endif" id="gallery{{ $g->id }}" role="tabpanel" aria-labelledby="gallery{{ $g->id }}-tab">
                        <div class="row justify-content-center">
                            @foreach($g->photos as $p)
                                <div class="col-lg-4">
                                    <div class="border-gradient-photo">
                                        <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-{{ $g->id }}" title="">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" width="520" height="293">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="cta sec-pad-big">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-xxl-10 mx-auto cta__box" data-aos="flip-up" data-aos-duration="700" loading="lazy">
                        <img src="{{ asset('images/tlo-cta.jpg') }}" alt="budynek" class="cta__img-bg" width="295" height="510" loading="lazy">
                        <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta__img" width="428" height="627" loading="lazy">
                        <div class="row">
                            @foreach($sections as $s)
                                @if($s->id == 2)
                                    <div class="col-xl-7">
                                        <div class="section-header mb-3">
                                            <p class="section-header__subtitle">{{ $s->modaleditor }}</p>
                                            <h2 class="section-header__title">{{ $s->modaltytul }}</h2>
                                        </div>
                                        <div>
                                            {!! $s->modaleditortext !!}
                                        </div>
                                        <div class="cta__contact mt-5 d-flex align-items-center">
                                            <div class="d-flex align-items-center me-sm-5 mb-4 mb-md-0">
                                                <a href="mailto:eximaco@eximaco-development.pl">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" class="project-icon">
                                                        <g transform="translate(-434 -3586)">
                                                            <g transform="translate(434 3586)" fill="none" stroke="#fff" stroke-width="1">
                                                                <ellipse cx="19.5" cy="19" rx="19.5" ry="19" stroke="none"/>
                                                                <ellipse cx="19.5" cy="19" rx="19" ry="18.5" fill="none"/>
                                                            </g>
                                                            <g transform="translate(445.421 3599.387)">
                                                                <path data-name="Path 119" d="M4.679,6H18.107a1.684,1.684,0,0,1,1.679,1.679V17.75a1.684,1.684,0,0,1-1.679,1.679H4.679A1.684,1.684,0,0,1,3,17.75V7.679A1.684,1.684,0,0,1,4.679,6Z" transform="translate(-3 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                                <path data-name="Path 120" d="M19.786,9l-8.393,5.875L3,9" transform="translate(-3 -7.321)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                            </g>
                                                        </g>
                                                    </svg>

                                                    eximaco@eximaco-development.pl</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="tel:+48536882090">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" class="project-icon">
                                                        <g transform="translate(-769 -3586)">
                                                            <g data-name="Ellipse 20" transform="translate(769 3586)" fill="none" stroke="#fff" stroke-width="1">
                                                                <ellipse cx="19.5" cy="19" rx="19.5" ry="19" stroke="none"/>
                                                                <ellipse cx="19.5" cy="19" rx="19" ry="18.5" fill="none"/>
                                                            </g>
                                                            <path data-name="Icon feather-phone" d="M17.985,14.116v2.235a1.49,1.49,0,0,1-1.624,1.49,14.745,14.745,0,0,1-6.43-2.287,14.528,14.528,0,0,1-4.47-4.47,14.745,14.745,0,0,1-2.287-6.46A1.49,1.49,0,0,1,4.657,3H6.892a1.49,1.49,0,0,1,1.49,1.281A9.566,9.566,0,0,0,8.9,6.375a1.49,1.49,0,0,1-.335,1.572l-.946.946a11.921,11.921,0,0,0,4.47,4.47l.946-.946a1.49,1.49,0,0,1,1.572-.335A9.566,9.566,0,0,0,16.7,12.6,1.49,1.49,0,0,1,17.985,14.116Z" transform="translate(777.813 3595.17)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                        </g>
                                                    </svg>

                                                    537 801 301</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact text-center text-sm-start sec-pad  radial-bg-2">
            <div class="container">
                <div class="row">
                    @foreach($sections as $s)
                        @if($s->id == 3)
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">{{ $s->modaleditor }}</p>
                            <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">{{ $s->modaltytul }}</h2>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            {!! $s->modaleditortext !!}
                        </div>
                        <a href="{{ $s->modallink }}" class="project-btn project-btn--gray"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">{{ $s->modallinkbutton }}</a>
                    </div>
                        @endif
                    @endforeach
                    <div class="col-lg-6 offset-lg-1">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script type="text/javascript">
        const map = L.map('map').setView([52.124160, 20.668000], 14);
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        L.marker([52.124160, 20.668000]).addTo(map)
            .bindPopup('<img src="{{ asset('images/logo-dark.svg') }}" width="73" height="27" alt="logo" class="mb-2"> <br> Przeskok 6 <br> 05-822 Milanówek')
            .openPopup();
    </script>
@endpush