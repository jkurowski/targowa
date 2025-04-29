@extends('layouts.page', ['body_class' => 'about-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-header__title">{{ $page->title }}</h2>
                    {!! parse_text($page->content) !!}
                </div>
            </div>
        </div>
    </main>
@endsection
