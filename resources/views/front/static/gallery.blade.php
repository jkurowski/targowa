@extends('layouts.page', ['body_class' => 'gallery-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)


@section('content')
    <main>
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec gallery sec-pad position-relative">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 mx-auto text-center">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Galeria inwestycji</h1>
                            <p class="section-header__subtitle">Poznaj nas bliżej</p>
                        </div>
                        <p class="section-desc">HI TOWER to nowoczesny budynek, który łączy funkcjonalne rozwiązania z
                            nowoczesnym designem</p>
                    </div>
                </div>
                <ul class="nav nav-tabs mb-4" id="galleryTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery1-tab" data-bs-toggle="tab" data-bs-target="#gallery1"
                            type="button" role="tab" aria-controls="gallery1" aria-selected="true">
                            Budynek i otoczenie
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery2-tab" data-bs-toggle="tab" data-bs-target="#gallery2"
                            type="button" role="tab" aria-controls="gallery2" aria-selected="false" tabindex="-1">
                            Części wspólne
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery3-tab" data-bs-toggle="tab" data-bs-target="#gallery3"
                            type="button" role="tab" aria-controls="gallery3" aria-selected="false" tabindex="-1">
                            Postępy prac
                        </button>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="tab-content" id="galleryTabContent">
                    <div class="tab-pane active" id="gallery1" role="tabpanel" aria-labelledby="gallery1-tab">
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g2.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g2.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g3.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g3.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g4.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g4.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g5.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g5.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g6.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g6.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g7.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g7.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g8.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g8.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g9.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g9.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/g10.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/g10.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="gallery2" role="tabpanel" aria-labelledby="gallery2-tab">
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/cz1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/cz1.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/cz2.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/cz2.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/cz3.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/cz3.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/cz4.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/cz4.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/cz5.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/cz5.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/cz6.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/cz6.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="gallery3" role="tabpanel" aria-labelledby="gallery3-tab">
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/pp1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/pp1.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/pp1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/pp1.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/pp1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/pp1.jpg') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
