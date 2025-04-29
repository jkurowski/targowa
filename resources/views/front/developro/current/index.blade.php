@extends('layouts.page', ['body_class' => 'completed-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Inwestycje w sprzedaży</li>
                    </ol>
                </nav>
            </div>
        </section>

        @foreach($investments as $index => $r)
            @if($index % 2 === 0)
                <section class="@if($index === 0) first-sec @endif investments-list sec-pad radial-bg-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 mb-5 mb-xl-0 align-self-center">
                                <div class="section-header mb-3 @if($index > 0) aos-init aos-animate @endif" @if($index > 0) data-aos="fade-in" data-aos-duration="700" @endif>
                                    <p class="section-header__subtitle">{{ $r->city }}</p>
                                    <h2 class="section-header__title">{{ $r->name }}</h2>
                                </div>
                                <div @if($index > 0) data-aos="fade-in" data-aos-duration="700" data-aos-delay="300" class="aos-init" @endif >
                                    <div class="inner-html mb-4">
                                        <p>{!! $r->entry_content !!}</p>
                                    </div>
                                    <div class="investments-list__info row mb-4">
                                        @if($r->areas_amount)
                                            <div class="col-6 col-sm-4">
                                                <p>Mieszkania: {{ $r->areas_amount }}</p>
                                            </div>
                                        @endif
                                        @if($r->date_end)
                                            <div class="col-6 col-sm-4">
                                                <p>Rok: {{ $r->date_end }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <a href="{{ route('front.developro.investment.index', $r->slug) }}" class="project-btn project-btn--gray">Sprawdź</a>
                                </div>
                            </div>
                            <div class="col-xl-6 offset-xl-1 align-self-center position-relative @if($index > 0) aos-init aos-animate @endif" @if($index > 0) data-aos="fade-up" data-aos-duration="700" @endif>
                                <div class="investments-list__blurred-photo">
                                    <img src="{{ asset('investment/thumbs/'.$r->file_thumb) }}" alt="{{ $r->name }}" width="456" height="488" loading="eager">
                                </div>
                                <div class="investments-list__photo">
                                    <img src="{{ asset('investment/thumbs/'.$r->file_thumb) }}" alt="{{ $r->name }}" width="440" height="360" loading="eager">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section class="investments-list--reverse sec-pad">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 order-2 order-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                                <div class="investments-list__blurred-photo">
                                    <img src="{{ asset('investment/thumbs/'.$r->file_thumb) }}" alt="{{ $r->name }}" width="456" height="488" loading="eager">
                                </div>
                                <div class="investments-list__photo">
                                    <img src="{{ asset('investment/thumbs/'.$r->file_thumb) }}" alt="{{ $r->name }}" width="440" height="360" loading="eager">
                                </div>
                            </div>
                            <div class="col-xl-5 offset-xl-1 order-1 order-xl-2 mb-5 mb-xl-0 align-self-center">
                                <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                                    <p class="section-header__subtitle">{{ $r->city }}</p>
                                    <h2 class="section-header__title">{{ $r->name }}</h2>
                                </div>
                                <div data-aos="fade-in" data-aos-duration="700" data-aos-delay="300">
                                    <div class="inner-html mb-4">
                                        <p>{!! $r->entry_content !!}</p>
                                    </div>
                                    <div class="investments-list__info row mb-4">
                                        @if($r->areas_amount)
                                            <div class="col-6 col-sm-4">
                                                <p>Mieszkania: {{ $r->areas_amount }}</p>
                                            </div>
                                        @endif
                                        @if($r->date_end)
                                            <div class="col-6 col-sm-4">
                                                <p>Rok: {{ $r->date_end }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <a href="{{ route('front.developro.investment.index', $r->slug) }}" class="project-btn project-btn--gray">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach

        <section class="cta cta-form sec-pad">
            @include('front.contact.form', [ 'page_name' => 'Inwestycje w sprzedaży'])
        </section>

        <section class="contact text-center text-sm-start sec-pad radial-bg-2">
            <div class="container inline inline-tc">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700" data-modaltytul="1">{!! getInline($array, 1, 'modaltytul') !!}</p>
                            <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-modaleditor="1">{!! getInline($array, 1, 'modaleditor') !!}</h2>
                        </div>
                        <div class="mb-5 inner-html" data-modaleditortext="1">
                            {!! getInline($array, 1, 'modaleditortext') !!}
                        </div>
                        <a href="" class="project-btn project-btn--gray">Sprawdź</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div id="map"></div>
                    </div>
                </div>
                @auth
                    <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="1" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="570" data-imgheight="380"></button></div>
                @endauth
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