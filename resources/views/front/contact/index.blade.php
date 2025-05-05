@extends('layouts.page', ['body_class' => 'contact-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                </ol>
            </nav>
        </div>

        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-4 text-center">
                        <h1 class="section-title">Kontakt</h1>
                        <p class="page-title-desc">Masz pytania? Chcesz poznać szczegóły oferty lub po prostu dowiedzieć się więcej?</p>
                    </div>
                </div>
            </div>
        </section>

        <x-cta />

        <section class="pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-6 text-center">
                        <h1 class="section-title">Formularz kontaktowy</h1>
                        <p class="page-title-desc">Nasi doradcy są tu dla Ciebie – chętnie opowiedzą o inwestycji i pomogą wybrać apartament dopasowany do Twoich potrzeb.</p>
                    </div>
                </div>
                <div class="row mt-4 mt-sm-5">
                    <div class="col-12">
                        @include('front.contact.form')
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
