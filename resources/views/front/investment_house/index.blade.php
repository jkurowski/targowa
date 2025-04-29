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
                        <li class="breadcrumb-item"><a href="{{ route('front.current') }}">Inwestycje w sprzedaży</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('front.current.show', $investment->slug) }}">{{ $investment->name }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.developro.investment.index', $investment->slug) }}">Plan inwestycji</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$property->name}}</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="first-sec apartment-desc">
            <div class="container">
                <nav class="pt-4 pb-5 single-apartment-nav">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            @if($prev_house)
                            <a href="{{route('front.developro.house.index', [$investment->slug, $prev_house->id])}}"><img src="{{ asset('images/arrow-left.svg') }}" alt="strzałka w lewo" width="28" height="28" loading="eager"><span class="ms-3">{{$prev_house->name}}</span></a>
                            @endif
                        </div>

                        <div class="col-6 d-flex align-items-center justify-content-end">
                            @if($next_house)
                            <a href="{{route('front.developro.house.index', [$investment->slug, $next_house->id])}}"><span class="me-3">{{$next_house->name}}</span><img src="{{ asset('images/arrow-right.svg') }}" alt="strzałka w prawo" width="28" height="28" loading="eager"></a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <p class="section-header__subtitle">{{ $investment->city }} - {{ $investment->name }}</p>
                            <h1 class="section-header__title">{{ $property->name }}</h1>
                        </div>
                        <div class="desc-anim">
                            <div class="inner-html">
                                {!! $investment->entry_content !!}
                            </div>
                            <table class="table mb-5">
                                <tbody>
                                <tr>
                                    <td>Pokoje</td>
                                    <td class="text-end">{{ $property->rooms }}</td>
                                </tr>
                                <tr>
                                    <td>Powierzchnia</td>
                                    <td class="text-end">{{ $property->area }}<sup>2</sup></td>
                                </tr>
                                <tr>
                                    <td>Aneks / Kuchnia</td>
                                    <td class="text-end">aneks kuchenny</td>
                                </tr>
                                <tr>
                                    <td>Wystawa okienna: </td>
                                    <td class="text-end">północny-wschód <br>południowy-zachód</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="offer-list-box__pdf d-inline-block mb-5 mb-xl-0 me-3 me-sm-5">
                                <img src="{{ asset('images/pdf.svg') }}" alt="pdf ikona" class="me-3" width="21" height="24" loading="eager">  <a href="{{ asset('investment/property/pdf/'.$property->file_pdf) }}" target="_blank">Pobierz pdf</a>
                            </div>
                            <div class="d-inline-block">
                                <a href="#formularz-kontaktowy" class="project-btn project-btn--gray">Zapytaj o mieszkanie</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 photo-anim">
                        @if($property->file)
                            <a href="{{ asset('/investment/property/'.$property->file) }}" class="swipebox">
                                <picture>
                                    <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                    <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                    <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}" loading="eager" class="img-thumb">
                                </picture>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="similar-offers sec-pad">
            <div class="container">
                <div class="section-header text-center">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Zobacz również</p>
                    <h2 class="section-header__title"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Podobne mieszkania</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="similar-offers-slider">
                            @foreach($similar as $s)
                            <div>
                                <div class="offer-list-box status-sprzedany position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offer-list-box__img">
                                            @if($s->file)
                                                <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $s])}}">
                                                    <picture>
                                                        <source type="image/webp" srcset="/investment/property/list/webp/{{$s->file_webp}}">
                                                        <source type="image/jpeg" srcset="/investment/property/list/{{$s->file}}">
                                                        <img src="/investment/property/list/{{$s->file}}" alt="Plan {{$s->name}}" loading="lazy">
                                                    </picture>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-4 offer-list-box__name">
                                                    <p class="mb-2">{{ $s->name_list }}</p>
                                                    <p class="offer-list-box__name--big mb-0">{{ $s->number }}</p>
                                                </div>
                                                <div class="col-6 col-lg-4 offer-list-box__rooms text-center">
                                                    <p class="">Pokoje</p>
                                                    <p class="mb-0">{{ $s->rooms }}</p>
                                                </div>
                                                <div class="col-6 col-lg-4 offer-list-box__area text-center">
                                                    <p class="">Powierzchnia</p>
                                                    <p class="mb-0">{{ $s->area }} m<sup>2</sup></p>
                                                </div>
                                            </div>
                                            <div class="row mt-4 align-items-center">
                                                <div class="col-6 col-lg-5 text-center offer-list-box__pdf d-flex align-items-center justify-content-center justify-content-lg-start">
                                                    <img src="{{ asset('images/pdf.svg') }}" alt="Ikonka pliku .pdf" class="me-3"  width="21" height="24" loading="lazy">
                                                    <a href="{{ asset('investment/property/pdf/'.$s->file_pdf) }}" target="_blank">Pobierz pdf</a>
                                                </div>
                                                <div class="col-6 col-lg-7 text-center">
                                                    <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $s])}}" class="project-btn project-btn--gray"><span>Sprawdź</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer-list-box__status-container">
                                        {!! roomStatusBadge($s->status) !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="formularz-kontaktowy" class="cta cta-form sec-pad">
            @include('front.contact.form', ['page_name' => 'Kontakt'])
        </section>

    </main>
@endsection