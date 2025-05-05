@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $investment->floor->name . ' - ' . $property->name)
@section('seo_title', $page->meta_title . ' - ' . $investment->floor->name)
@section('seo_description', $page->meta_description)
@section('content')
    <main class="single-apartment">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.developro.investment.index') }}">Apartamenty</a>
                    <li class="breadcrumb-item"><a href="{{ route('front.developro.investment.floor', [$floor, Str::slug($floor->name)]) }}">{{ $floor->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $property->name }}</li>
                </ol>
            </nav>
        </div>

        <section class="pt-0">
            <div class="container">
                <nav class="pt-4 pb-5 single-apartment-nav">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            @if ($prev)
                                <a href="{{ route('front.developro.investment.property', [$prev, Str::slug($prev->name), $floor->number, number2RoomsName($prev->rooms, true), round(floatval($prev->area), 2) . '-m2']) }}" class="bttn-big">{{ $prev->name }}</a>
                            @endif
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            @if ($next)
                                <a href="{{ route('front.developro.investment.property', [$next, Str::slug($next->name), $floor->number, number2RoomsName($next->rooms, true), round(floatval($next->area), 2) . '-m2']) }}" class="bttn-big">{{ $next->name }}</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1 class="section-title">{{ $property->name_list }} {{ $property->number }}</h1>
                        <div class="row my-5 apartment-details">
                            <div class="col-4">
                                <p>Metraż: {{ $property->area }} m<sup>2</sup></p>
                            </div>
                            <div class="col-4 apartment-details-middle">
                                <p>Pokoje: {{ $property->rooms }}</p>
                            </div>
                            <div class="col-4">
                                <p>Piętro: {{ $property->floor->number }}</p>
                            </div>
                        </div>

                        <div class="apartment-buttons">
                               <div class="">
                                <a href="#formularz-kontaktowy" class="bttn-big mt-0">Zapytaj o mieszkanie</a>
                                @if($property->file_pdf)
                                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" class="bttn-big mt-0" target="_blank">Pobierz kartę PDF</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
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
            <section class="pt-0">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title text-center">Podobne mieszkania</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($similar as $r)
                        <div class="col-3">
                            <div class="carousel-room-item">
                                <h2 class="text-center"><a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}">{{ $r->name_list }} <br>{{$r->number}}</a></h2>
                                <ul class="list-unstyled">
                                    <li>Metraż: <span>{{ $r->area }} m<sup>2</sup></span></li>
                                    <li>Pokoje: <span>{{ $r->rooms }}</span></li>
                                    <li>Piętro: <span>{{ $r->floor->number }}</span></li>
                                </ul>

                                <div class="text-center">
                                    <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}" class="bttn-text bttn-text-white">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#fff"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row pt-5 pt-sm-0">
                        <div class="col-12 text-center pt-5">
                            <a href="{{ route('front.developro.investment.floor', [$property->floor, Str::slug($property->floor->name)]) }}"
                                class="bttn-text">Sprawdź więcej <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#000"/></svg></a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section id="formularz-kontaktowy" class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="section-title">Zapytaj o mieszkanie</h2>
                    </div>

                    <div class="col-12 mt-4">
                        @include('front.contact.form', ['propertyId' => $property->id])
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
