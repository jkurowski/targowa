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
                    <li class="breadcrumb-item active" aria-current="page">Inwestor</li>
                </ol>
            </nav>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <h1 class="section-title">Inwestor</h1>
                        <p>Nasza spółka, działająca nieprzerwanie od 1999 roku, może pochwalić się wieloletnim doświadczeniem w zarządzaniu projektami budowlanymi na terenie całej Polski. Tylko w ostatnich 5 latach z sukcesem nadzorowaliśmy 10 inwestycji deweloperskich o łącznej powierzchni 35 000 m², w ramach których powstały 823 mieszkania i 14 lokali usługowych. Stabilność, doświadczenie i sprawdzony zespół sprawiają, że realizacja Finezja Targowa 49 to pewna inwestycja – zbudowana na solidnych fundamentach. Tworzymy miejsca, w których sami chcielibyśmy mieszkać. Wierzymy, że komfort zaczyna się od zaufania i dokładamy wszelkich starań, by to zaufanie budować każdego dnia.</p>
                        <div class="row mt-4 investor-atuty">
                            <div class="col-md-6 d-flex align-items-center mb-0 mb-lg-4">
                                <img src="{{ asset('images/dbalosc.svg') }}" alt="ikonka" width="66" height="66" loading="eager">
                                <p>Dbałość o klienta</p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-0 mb-lg-4">
                                <img src="{{ asset('images/jakosc.svg') }}" alt="ikonka" width="66" height="66" loading="eager">
                                <p>Jakość wykonania</p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="{{ asset('images/rozwoj.svg') }}" alt="ikonka" width="66" height="66" loading="eager">
                                <p>Rozwój społeczności</p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="{{ asset('images/rzetelnosc.svg') }}" alt="ikonka" width="66" height="66" loading="eager">
                                <p>Rzetelność</p>
                            </div>
                        </div>
                        <a href="https://pm-invest.com.pl/" class="bttn-big" target="_blank">Sprawdź</a>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-end">
                        <div class="circle-holder">
                            <img src="{{ asset('images/inwestor.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-lg-6 order-2 order-lg-1 d-flex align-items-center">
                        <div>
                            <h1 class="section-title">Partnerstwo</h1>
                            <p>Siłą naszej firmy są ludzie, którzy ją tworzą i z nią współpracują. Skupiamy wiedzę i doświadczenie w prowadzeniu przedsięwzięć budowlanych architektów, kierowników projektu, kierowników budowy, inżynierów kontraktu, inżynierów budowy oraz specjalistów branżowych i bardzo dobrych wykonawców. Bez nich proces budowlany nie byłby możliwy do zrealizowania w odpowiedniej jakości i terminach.</p>
                            <a href="https://pm-invest.com.pl/o-nas/" class="bttn-big">Sprawdź</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-start">
                        <div class="circle-holder">
                            <img src="{{ asset('images/partnerstwo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 order-2 order-lg-1 d-flex align-items-center">
                        <div>
                            <h1 class="section-title">Zarządzanie projektami</h1>
                            <p>Przedmiot naszej działalności obejmuje cały zakres zarządzania projektami - planowanie (w tym analiza parametrów technicznych i ekonomicznych projektu), opracowanie budżetów i harmonogramów inwestycji, projektowanie z uzyskaniem pozwolenia na budowę, wybór wykonawców i ich kontraktowanie, kierowanie procesem budowlanym, nadzorowanie prac i rozliczanie wszystkich uczestników procesu, odbiory i uzyskanie pozwolenia na użytkowanie, rozliczenie kontraktu oraz innych czynności związanych z zakończeniem procesu inwestycyjnego.</p>
                            <a href="https://pm-invest.com.pl/" class="bttn-big" target="_blank">Sprawdź</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-end">
                        <div class="circle-holder">
                            <img src="{{ asset('images/kompleksowosc.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <div class="partners">
                            <a href="https://pm-invest.com.pl/" class="me-4"><img src="{{ asset('images/pminvest-logo.png') }}" alt="Logotyp PM Invest" width="80" height="82"></a>
                            <a href="https://www.pzfd.pl/s/developers" target="_blank" rel="nofollow"><img src="{{ asset('images/pzfd_logo.png') }}" width="180" height="62px" alt="Logo PZFD" loading="lazy"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-cta />
    </main>
@endsection
