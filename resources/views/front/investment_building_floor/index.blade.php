@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title .' - '. $investment->floor->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="apartments">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.developro.investment.index') }}">Apartamenty</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$investment->floor->name}}</li>
                </ol>
            </nav>
        </div>

        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <h1 class="page-title">{{$investment->floor->name}}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <div class="row floor-nav-row mt-5">
                            <div class="col-12 col-lg-4 text-start">
                                @if($prev_floor)
                                    <a href="{{route('front.developro.investment.floor', [$prev_floor, Str::slug($prev_floor->name)])}}" class="bttn-big">{{$prev_floor->name}}</a>
                                @endif
                            </div>
                            <div class="col-12 col-lg-4 d-flex justify-content-center">
                                <a href="{{ route('front.developro.investment.index') }}" class="bttn-big">Plan budynku</a>
                            </div>
                            <div class="col-12 col-lg-4 text-end">
                                @if($next_floor)
                                    <a href="{{route('front.developro.investment.floor', [$next_floor, Str::slug($next_floor->name)])}}" class="bttn-big">{{$next_floor->name}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        @if($investment->floor->file)
                            <div id="floorplan-holder" class="p-1">
                                <img src="{{ asset('/investment/floor/'.$investment->floor->file) }}" alt="{{$investment->floor->name}}" id="invesmentplan" usemap="#invesmentplan">
                            </div>
                            <map name="invesmentplan">
                                @if($properties)
                                    @foreach($properties as $r)
                                        @if($r->html)
                                            <area
                                                    shape="poly"
                                                    href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2).'-m2']) }}"
                                                    data-item="{{$r->id}}"
                                                    title="{{$r->name}}<br>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b><br />Pokoje: <b class=fr>{{$r->rooms}}</b><br><b>{{ roomStatus($r->status) }}</b>"
                                                    alt="{{$r->slug}}"
                                                    data-roomnumber="{{$r->number}}"
                                                    data-roomtype="{{$r->typ}}"
                                                    data-roomstatus="{{$r->status}}"
                                                    coords="{{cords($r->html)}}"
                                                    class="inline status-{{$r->status}}"
                                            >
                                        @endif
                                    @endforeach
                                @endif
                            </map>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="search-results">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto pt-5 d-flex aligm-items-center justify-content-end">
                        <div class="list-view d-flex aligm-items-center">
                            <div id="list">
                                <img src="{{ asset('images/lista.svg') }}" alt="ikonka listy" class="list-view__icon active">
                            </div>
                            <div id="grid" class="ps-3">
                                <img src="{{ asset('images/siatka.svg') }}" alt="ikonka siatki" class="list-view__icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 mx-auto mt-3">
                        <div id="offerList" class="list">
                            <div class="offerList offerList-list">
                                @if($properties)
                                @foreach($properties as $r)
                                <div class="offer-list-box position-relative mb-4">
                                    <div class="apartment-box project-gradient">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="apartment-box__name">
                                                    <p class="">{{$r->name_list}}</p>
                                                    <p class="mb-0">Hi {{$r->number}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="apartment-box__details row my-4">
                                                    <div class="col-sm-4 pe-0">
                                                        <p class="">Metraż: {{$r->area}} m<sup>2</sup></p>
                                                    </div>
                                                    <div class="col-sm-4 text-center">
                                                        <p class="">Pokoje: {{$r->rooms}}</p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="">{{$r->floor->name}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2).'-m2']) }}" class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small" target="_blank">Sprawdź</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer-list-box__status-container offer-list-box__status--{{ Str::slug(roomStatus($r->status)) }}"><div class="offer-list-box__status "><span>{{ roomStatus($r->status) }}</span></div></div>
                                    <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2).'-m2']) }}" class="stretched-link" target="_blank"></a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="offerList offerList-grid">
                                <div class="row">
                                    @if($properties)
                                    @foreach($properties as $r)
                                    <div class="col-lg-4 mb-4">
                                        <div class="offer-list-box ">
                                            <div class="apartment-box project-gradient mb-2">
                                                @if($r->file)
                                                    <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2).'-m2']) }}">
                                                        <picture>
                                                            <source type="image/webp" srcset="/investment/property/list/webp/{{$r->file_webp}}">
                                                            <source type="image/jpeg" srcset="/investment/property/list/{{$r->file}}">
                                                            <img src="/investment/property/list/{{$r->file}}" alt="{{$r->name}}" class="w-100">
                                                        </picture>
                                                    </a>
                                                @endif
                                                <div class="apartment-box__name mt-3">
                                                    <p class="">{{$r->name}}</p>
                                                </div>
                                                <div class="apartment-box__details row my-4">
                                                    <div class="col-sm-4 pe-0">
                                                        <p class="">Metraż: {{$r->area}} m<sup>2</sup></p>
                                                    </div>
                                                    <div class="col-sm-4 text-center">
                                                        <p class="">Pokoje: {{$r->rooms}}</p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="">{{$r->floor->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2).'-m2']) }}" class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small" target="_blank">Sprawdź</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offer-list-box__status-container offer-list-box__status--{{ Str::slug(roomStatus($r->status)) }}"><div class="offer-list-box__status "><span>{{ roomStatus($r->status) }}</span></div></div>
                                            <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2).'-m2']) }}" class="stretched-link"></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/developro.min.css') }}" rel="stylesheet">
@endpush
