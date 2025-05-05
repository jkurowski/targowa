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
                        <form class="contact-form row">
                            <div class="col-12 col-sm-6 col-lg-4 mb-2 mb-sm-4">
                                <label for="name" class="lab-anim">Imię</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-2 mb-sm-4">
                                <label for="phone" class="lab-anim">Telefon</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="col-12 col-lg-4 mb-2 mb-sm-4">
                                <label for="email" class="lab-anim">Adres e-mail</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="col-12 mb-2 mb-sm-4 box-anim">
                                <label for="Message" class="lab-anim">Wiadomość</label>
                                <textarea id="Message" name="Message" class="form-control" rows="2" maxlength="3000" required></textarea>
                            </div>
                            <div class="col-12 mb-2 mb-sm-3 form-check">
                                <div class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="check1">
                                    <label class="form-check-label" for="check1">Akceptuję <a href="polityka-prywatnosci.html">Politykę prywatności*.</a> </label>
                                </div>
                            </div>
                            <div class="col-12 text-start">
                                <button type="submit" class="bttn-big mt-0">Wyślij</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
