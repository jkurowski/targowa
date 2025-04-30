@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="apartments">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apartamenty</li>
                </ol>
            </nav>
        </div>

        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <h1 class="page-title">Znajdź swój apartament!</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if ($investment->plan)
                            <div id="plan">
                                <div id="plan-holder" class="d-flex justify-content-center m-auto p-1">
                                    <img src="{{ asset('/investment/plan/' . $investment->plan->file) }}"
                                        alt="{{ $investment->name }}" id="invesmentplan" usemap="#invesmentplan"
                                        class="d-block mx-auto main-building" loading="eager">
                                </div>
                                <map name="invesmentplan">
                                    @foreach ($investment->floors as $floor)
                                        @if ($floor->html)
                                            <area shape="poly"
                                                href="{{ route('front.developro.investment.floor', [$floor, Str::slug($floor->name)]) }}"
                                                title="{{ $floor->name }}" alt="floor-{{ $floor->id }}"
                                                data-item="{{ $floor->id }}" data-floornumber="{{ $floor->id }}"
                                                data-floortype="{{ $floor->type }}" coords="{{ cords($floor->html) }}">
                                        @endif
                                    @endforeach
                                </map>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div id="search">
                        <form action="" method="get" class="d-flex align-items-center h-100">
                            <div class="col">
                                <div class="input-select">
                                    <label for="inputRooms" class="form-label">Ilość pokoi</label>
                                    <select id="inputRooms" class="form-select" name="s_pokoje">
                                        <option value="" {{ request('s_pokoje') == null ? 'selected' : '' }}>Wszystkie</option>
                                        <option value="1" {{ request('s_pokoje') == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ request('s_pokoje') == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ request('s_pokoje') == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ request('s_pokoje') == 4 ? 'selected' : '' }}>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-select">
                                    <label for="inputArea" class="form-label">Metraż</label>
                                    <select id="inputArea" class="form-select" name="s_metry">
                                        <option selected>Wszystko</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-select">
                                    <label for="inputFloor" class="form-label">Piętro</label>
                                    <select id="inputFloor" class="form-select" name="s_pietro">
                                        <option value="" {{ request('s_pietro') == null ? 'selected' : '' }}>Wszystkie</option>
                                        @foreach($floors as $f)
                                            <option value="{{ $f->id }}" {{ request('s_pietro') == $f->id ? 'selected' : '' }}>{{ $f->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="34.168" height="34.177" viewBox="0 0 34.168 34.177"><path d="M38.267,36.2l-9.5-9.592a13.543,13.543,0,1,0-2.055,2.082l9.441,9.53a1.462,1.462,0,0,0,2.064.053A1.472,1.472,0,0,0,38.267,36.2ZM18.123,28.8a10.694,10.694,0,1,1,7.563-3.132A10.628,10.628,0,0,1,18.123,28.8Z" transform="translate(-4.5 -4.493)" fill="#978c7d"/></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="pb-0 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto pt-4 d-flex aligm-items-center justify-content-end">
                        <div class="list-view d-flex aligm-items-center">
                            <div id="list">
                                <img src="{{ asset('images/lista.svg') }}" alt="ikonka listy"
                                    class="list-view__icon active">
                            </div>
                            <div id="grid" class="ps-3">
                                <img src="{{ asset('images/siatka.svg') }}" alt="ikonka siatki" class="list-view__icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 mx-auto mt-3">
                        <div id="offerList" class="list">
                            <div class="offerList offerList-list">
                                @if ($properties)
                                    @foreach ($properties as $r)
                                        <div class="offer-list-box position-relative mb-4">
                                            <div class="apartment-box project-gradient">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="apartment-box__name">
                                                            @if($r->id == 4)
                                                                <p class="">{{ $r->name_list }}</p>
                                                                <p class="mb-0">{{ $r->number }}</p>
                                                            @else
                                                                <p class="mb-0">Hi {{ $r->number }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartment-box__details row my-4">
                                                            <div class="col-sm-4 pe-0">
                                                                <p class="">Metraż: {{ $r->area }}
                                                                    m<sup>2</sup></p>
                                                            </div>
                                                            <div class="col-sm-4 text-center">
                                                                <p class="">Pokoje: {{ $r->rooms }}</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="">{{ $r->floor->name }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor->number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                            class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                            target="_blank">Sprawdź</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="offer-list-box__status-container offer-list-box__status--{{ Str::slug(roomStatus($r->status)) }}">
                                                <div class="offer-list-box__status ">
                                                    <span>{{ roomStatus($r->status) }}</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor->number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                class="stretched-link" target="_blank"></a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="offerList offerList-grid">
                                <div class="row">
                                    @if ($properties)
                                        @foreach ($properties as $r)
                                            <div class="col-sm-6 col-lg-4 mb-4">
                                                <div class="offer-list-box position-relative">
                                                    <div class="apartment-box project-gradient mb-2">
                                                        <div class="apartment-box__img_wrapper">
                                                            <img src="{{ asset('investment/property/thumbs/webp/' . $r->file_webp) }}"
                                                                alt="Rzut {{ $r->name }}" class="apartment-box__img"
                                                                width="" height="60" loading="lazy">
                                                        </div>
                                                        <div class="apartment-box__name">
                                                            <p class="">{{ $r->name }}</p>
                                                        </div>
                                                        <div class="apartment-box__details row my-4">
                                                            <div class="col-sm-4 pe-0">
                                                                <p class="">Metraż: {{ $r->area }}
                                                                    m<sup>2</sup></p>
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
                                                                    class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current"
                                                                    target="_blank">Sprawdź</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="offer-list-box__status-container offer-list-box__status--{{ Str::slug(roomStatus($r->status)) }}">
                                                        <div class="offer-list-box__status ">
                                                            <span>{{ roomStatus($r->status) }}</span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                        class="stretched-link" target="_blank"></a>
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
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/developro.min.css') }}" rel="stylesheet">
@endpush
