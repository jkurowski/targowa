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
                        <li class="breadcrumb-item"><a href="/inwestycje-zrealizowane/">Inwestycje zrealizowane</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $investment->name }}</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="first-sec investments-list sec-pad radial-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle">{{ $investment->city }}</p>
                            <h2 class="section-header__title">{{ $investment->name }}</h2>
                        </div>
                        <div>
                            <div class="inner-html mb-4">
                                <p><strong>{!! $investment->entry_content !!}</strong></p>
                                <p>{!! $investment->content !!}</p>
                            </div>
                            <div class="investments-list__info row mb-4">
                                @if($investment->areas_amount)
                                    <div class="col-6 col-sm-4">
                                        <p>Mieszkania: {{ $investment->areas_amount }}</p>
                                    </div>
                                @endif
                                @if($investment->date_end)
                                    <div class="col-6 col-sm-4">
                                        <p>Rok: {{ $investment->date_end }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center position-relative">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ asset('investment/thumbs/'.$investment->file_thumb) }}" alt="{{ $investment->name }}" width="456" height="488" loading="eager">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ asset('investment/thumbs/'.$investment->file_thumb) }}" alt="{{ $investment->name }}" width="440" height="360" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
