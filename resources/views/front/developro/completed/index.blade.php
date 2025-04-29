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
                        <li class="breadcrumb-item active" aria-current="page">Inwestycje zrealizowane</li>
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
                                <div class="section-header mb-3 @if($index > 0) aos-init aos-animate @endif" data-aos="fade-in" data-aos-duration="700">
                                    <p class="section-header__subtitle">{{ $r->city }}</p>
                                    <h2 class="section-header__title">{{ $r->name }}</h2>
                                </div>
                                <div @if($index > 0) data-aos="fade-in" data-aos-duration="700" data-aos-delay="300" class="aos-init" @endif>
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
                                    <a href="{{ route('front.completed.show', $r->slug) }}" class="project-btn project-btn--gray">Sprawdź</a>
                                </div>
                            </div>
                            <div class="col-xl-6 offset-xl-1 align-self-center position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
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
                                    <a href="{{ route('front.completed.show', $r->slug) }}" class="project-btn project-btn--gray">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    </main>
@endsection
