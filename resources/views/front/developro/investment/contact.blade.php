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
                        <li class="breadcrumb-item"><a href="{{ route('front.current') }}">Inwestycje w sprzedaży</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('front.current.show', $investment->slug) }}">{{ $investment->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Plan inwestycji</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="first-sec investment-details project-tabs sec-pad radial-bg-2">
            <div class="container mt-4">
                <div class="section-header text-center mb-3">
                    <p class="section-header__subtitle">Dostępne domy</p>
                    <h1 class="section-header__title">{{ $investment->name }}</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <ul class="nav nav-tabs" id="detailsTab" role="tablist">
                            <li class="nav-item col-6 col-sm-4" role="presentation">
                                <a class="nav-link" id="details1-tab" href="{{ route('front.current.show', $investment->slug) }}">
                                    <img src="{{ asset('images/opis.svg') }}" alt="plik" width="25" height="25" loading="eager">
                                    <span>Wybierz</span>
                                    <strong>Opis inwestycji</strong>
                                </a>
                            </li>
                            <li class="nav-item col-6 col-sm-4" role="presentation">
                                <a class="nav-link" id="details2-tab" href="{{ route('front.developro.investment.index', $investment->slug) }}">
                                    <img src="{{ asset('images/dostepne.svg') }}" alt="dom" width="25" height="25" loading="eager">
                                    <span>Wybierz</span>
                                    <strong>Dostępne domy</strong>
                                </a>
                            </li>
                            <li class="nav-item col-sm-4" role="presentation">
                                <a class="nav-link active" id="details3-tab" href="{{ route('front.developro.investment.contact', $investment->slug) }}">
                                    <img src="{{ asset('images/kontakt.svg') }}" alt="avatar" width="25" height="25" loading="eager">
                                    <span>Wybierz</span>
                                    <strong>Kontakt</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content" id="detailsTabContent">
                    <div class="row">
                        @if($investment_page->active)
                        <div class="col-11 col-lg-9 mx-auto">
                            {!! parse_text($investment_page->content) !!}
                        </div>
                        @endif
                        <div class="col-11 col-lg-9 mx-auto cta__box">
                            <div class="row">
                                <div class="col-xl-12">
                                    @if (session('success'))
                                        <div class="alert alert-success border-0">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning border-0">
                                            {{ session('warning') }}
                                        </div>
                                    @endif
                                    <form method="post" action="" class="contact-form validateForm">
                                        {{ csrf_field() }}
                                        <div class="box-anim mb-3">
                                            <label for="name" class="lab-anim">Imię</label>
                                            <input name="form_name" type="text" class="form-control validate[required] @error('form_name') is-invalid @enderror" id="name" value="{{ old('form_name') }}">
                                            @error('form_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col box-anim">
                                                <label for="phone" class="lab-anim">Telefon</label>
                                                <input name="form_phone" type="tel" class="form-control validate[required] @error('form_phone') is-invalid @enderror" id="phone" value="{{ old('form_phone') }}">
                                                @error('form_phone')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col box-anim">
                                                <label for="email" class="lab-anim">Adres e-mail</label>
                                                <input name="form_email" type="email" class="form-control validate[required] @error('form_email') is-invalid @enderror" id="email" value="{{ old('form_email') }}">
                                                @error('form_email')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 box-anim">
                                            <label for="message" class="lab-anim">Wiadomość</label>
                                            <textarea name="form_message" id="message" class="form-control validate[required] @error('form_message') is-invalid @enderror" rows="2" maxlength="3000" required>{{ old('form_message') }}</textarea>
                                            @error('form_message')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>

                                        @foreach ($rules as $r)
                                            <div class="mb-3 form-check position-relative @error('rule_'.$r->id) is-invalid @enderror">
                                                <input name="rule_{{$r->id}}" type="checkbox" class="form-check-input @if($r->required === 1) validate[required] @endif" id="rule_{{$r->id}}">
                                                <label class="form-check-label form-check-label--check" for="rule_{{$r->id}}">{!! $r->text !!}</label>
                                                @error('rule_'.$r->id)
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        @endforeach
                                        <div class="text-center text-sm-end">
                                            <script type="text/javascript">
                                                document.write("<button type=\"submit\" class=\"project-btn project-btn--gray\"><span>Wyślij</span></button>");
                                            </script>
                                            <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                                        </div>
                                    </form>
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
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success') || session('warning') || $errors->any())
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush