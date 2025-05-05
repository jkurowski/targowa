@extends('layouts.page', ['body_class' => 'gallery-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                </ol>
            </nav>
        </div>

        <section class="pt-0">
            <div class="container">
                <div class="row mb-2 mb-sm-5 justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-4 text-center">
                        <h1 class="section-title">Galeria</h1>
                    </div>
                </div>

                <ul class="nav nav-tabs mb-4 d-flex justify-content-center" id="galleryTab" role="tablist">
                    @foreach($galleries as $key => $g)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($key == 0) active @endif" id="gallery{{ $g->id }}-tab" data-bs-toggle="tab" data-bs-target="#gallery{{ $g->id }}" type="button" role="tab" aria-controls="gallery{{ $g->id }}" aria-selected="true">
                                {{ $g->name }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="container">
                <div class="tab-content" id="galleryTabContent">
                    @foreach($galleries as $key => $g)
                        <div class="tab-pane @if($key == 0) active @endif" id="gallery{{ $g->id }}" role="tabpanel" aria-labelledby="gallery{{ $g->id }}-tab">
                            <div class="row justify-content-center">
                                @foreach($g->photos as $p)
                                    <div class="col-lg-4 mt-4">
                                        <div class="border-gradient-photo">
                                            <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-{{ $g->id }}" title="">
                                                <picture>
                                                    <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                                    <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                                    <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" width="520" height="293" class="img-rounded">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
