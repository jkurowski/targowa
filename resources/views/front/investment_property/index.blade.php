@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $investment->floor->name . ' - ' . $property->name)
@section('seo_title', $page->meta_title . ' - ' . $investment->floor->name)
@section('seo_description', $page->meta_description)
@section('content')
    <main class="single-apartment">
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.developro.investment.index') }}">Apartamenty</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('front.developro.investment.floor', [$floor, Str::slug($floor->name)]) }}">{{ $floor->name }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $property->name }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec apartment-desc">
            <img src="{{ asset('images/graphic.svg') }}" alt="grafika wieżowca" loading="lazy" class="project-graphic">
            <div class="container">
                <nav class="pt-4 pb-5 single-apartment-nav">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            @if ($prev)
                                <a href="{{ route('front.developro.investment.property', [$prev, Str::slug($prev->name), $floor->number, number2RoomsName($prev->rooms, true), round(floatval($prev->area), 2) . '-m2']) }}"
                                    class="single-apartment-nav-link-prev">{{ $prev->name }}</a>
                            @endif
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            @if ($next)
                                <a href="{{ route('front.developro.investment.property', [$next, Str::slug($next->name), $floor->number, number2RoomsName($next->rooms, true), round(floatval($next->area), 2) . '-m2']) }}"
                                    class="single-apartment-nav-link-next">{{ $next->name }}</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <h1 class="section-header__title section-header__title--h1">{{ $property->name_list }} Hi {{ $property->number }}</h1>
                            <p class="section-header__subtitle">Indywidualnie dostosowane do potrzeb</p>
                        </div>
                        <div class="desc-anim">


                            <div>
                                <div class="row my-5 apartment__details">
                                    <div class="col-4">
                                        <p>Metraż: {{ $property->area }} m<sup>2</sup></p>
                                    </div>
                                    <div class="col-4 apartment__details-middle">
                                        <p>Pokoje: {{ $property->rooms }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>Piętro: {{ $property->floor->number }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="">
                                <a href="#formularz-kontaktowy" class="project-btn">Zapytaj o mieszkanie</a>
                                @if($property->file_pdf)
                                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" class="d-inline-block ms-3 pt-3 link-offset-2  text-decoration-underline link-underline-opacity-75-hover" target="_blank">Pobierz kartę PDF</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 pt-lg-4 photo-anim text-end">
                        @if ($property->file)
                            <a href="{{ asset('/investment/property/' . $property->file) }}" class="swipebox">
                                <picture>
                                    <source type="image/webp"
                                        srcset="{{ asset('/investment/property/thumbs/webp/' . $property->file_webp) }}">
                                    <source type="image/jpeg"
                                        srcset="{{ asset('/investment/property/thumbs/' . $property->file) }}">
                                    <img src="{{ asset('/investment/property/thumbs/' . $property->file) }}"
                                        alt="{{ $property->name }}" class="w-100">
                                </picture>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @if ($similar->count() > 0)
            <section class="available-sec sec-pad">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-4 mx-auto text-center">
                            <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                                <h2 class="section-header__title">Podobne mieszkania</h2>
                                <p class="section-header__subtitle">Alternatywne oferty</p>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="available-slider">
                                @foreach ($similar as $r)
                                    <div>
                                        <div class="apartment-box project-gradient">
                                            <div class="apartment-box__name">
                                                <p class="">Hi {{ $r->number }}</p>
                                            </div>
                                            <div class="apartment-box__details row my-4">
                                                <div class="col-sm-4 pe-0">
                                                    <p class="">Metraż: {{ $r->area }} m<sup>2</sup></p>
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <p class="">Pokoje: {{ $r->rooms }}</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <p class="">{{ $r->floor->name }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                        class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                        target="_blank">Sprawdź</a>
                                                </div>
                                            </div>
                                            <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                class="stretched-link" target="_blank"></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 pt-sm-0">
                        <div class="col-12 text-center pt-5">
                            <a href="{{ route('front.developro.investment.floor', [$property->floor, Str::slug($property->floor->name)]) }}"
                                class="project-link">Sprawdź więcej</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section id="formularz-kontaktowy" class="sec-pad project-gradient @if($similar->count() == 0) mt-5 @endif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Zapytaj o mieszkanie</h2>
                            <p class="section-header__subtitle">Indywidualne konsultacje</p>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <form class="contact-form">
                            <div class="box-anim mb-3">
                                <label for="name" class="lab-anim">Imię</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="box-anim mb-3">
                                <label for="phone" class="lab-anim">Telefon</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="box-anim mb-3">
                                <label for="email" class="lab-anim">Adres e-mail</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-4 box-anim">
                                <label for="Message" class="lab-anim">Wiadomość</label>
                                <textarea id="Message" name="Message" class="form-control" rows="2" maxlength="3000" required></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="check1">
                                <label class="form-check-label" for="check1">Akceptuję <a
                                        href="polityka-prywatnosci.html">Politykę prywatności*.</a> </label>
                            </div>
                            <div class="text-center text-sm-end">
                                <button type="submit" class="project-btn project-btn--white"><span>Wyślij</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition: true,
                promptPosition: "topRight:-137px"
            });
        });
        @if (session('success') || session('warning'))
            $(window).load(function() {
                const aboveHeight = $('header').outerHeight();
                $('html, body').stop().animate({
                    scrollTop: $('.alert').offset().top - aboveHeight
                }, 1500, 'easeInOutExpo');
            });
        @endif
    </script>
@endpush
