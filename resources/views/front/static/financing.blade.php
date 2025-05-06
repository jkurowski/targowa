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
                    <li class="breadcrumb-item active" aria-current="page">Finansowanie</li>
                </ol>
            </nav>
        </div>

        <section class="financing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-xl-4 d-flex align-items-center">
                        <div>
                            <h1 class="section-title">Finansowanie</h1>
                            <p>Obsługą kredytów hipotecznych dla klientów zajmie się: <br><b>Pan Michał Chrakowiecki</b></p>
                            <div class="cta-contact mt-4">
                                <div class="d-flex align-items-center cta-contact-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><g transform="translate(0)"><rect width="21" height="21" rx="10.5" transform="translate(0 0)" fill="#978c7d"></rect><path d="M151.5,149.27l-1.3-1.078c-.827-.827-2.3,1.04-2.306,1.044-.115.115-1.039-.623-1.795-1.379s-1.493-1.68-1.379-1.795c0,0,1.872-1.478,1.044-2.306l-1.075-1.3c-1.161-1.012-4.784,1.737.069,6.593l.074.073.074.074C149.765,154.055,152.516,150.432,151.5,149.27Z" transform="translate(-136.375 -136.326)" fill="#fff"></path></g></svg>
                                    <div class="cta-contact-details">
                                        <a href="tel:+48603751281">603 751 281</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center cta-contact-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.264" height="21.264" viewBox="0 0 21.264 21.264"><g><path d="M10.632,0A10.632,10.632,0,1,0,21.264,10.632,10.632,10.632,0,0,0,10.632,0Zm5.607,13.916a1.066,1.066,0,0,1-1.063,1.063H6.088a1.066,1.066,0,0,1-1.063-1.063V8.361l5.6,2.8L16.239,8.42Zm0-6.545-5.6,2.735L5.025,7.31A1.066,1.066,0,0,1,6.087,6.285h9.089a1.066,1.066,0,0,1,1.063,1.062Z" fill="#978c7d"></path></g></svg>
                                    <div class="cta-contact-details">
                                        <a href="mailto:m.chrakowiecki@gremiumkredyty.pl">m.chrakowiecki@gremiumkredyty.pl</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex align-items-center justify-content-end mt-5 mt-lg-0">
                        <div class="circle-holder">
                            <img src="{{ asset('images/sprzedawca-michal-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
