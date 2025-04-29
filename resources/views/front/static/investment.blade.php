@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">O inwestycji</li>
                </ol>
            </nav>
        </div>

        <x-cta/>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/leaflet.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet">
    <script>

    </script>
@endpush
