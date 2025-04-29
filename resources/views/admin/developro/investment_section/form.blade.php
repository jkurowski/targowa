@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
    @if(Route::is('admin.developro.investment.section.edit'))
        <form method="POST" action="{{route('admin.developro.investment.section.update', [$investment, $entry])}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="POST" action="{{route('admin.developro.investment.section.store', $investment)}}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card-head container">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.investment.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span><a href="{{route('admin.developro.investment.section.index', $investment)}}">{{$investment->name}}: Sekcje tekstowe</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            @include('form-elements.back-route-button')
                            <div class="card-body control-col12">
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-select', ['label' => 'Typ sekcji', 'name' => 'type', 'selected' => $entry->type, 'select' => [
                                        '1' => 'Tytuł, Sub-tytuł',
                                        '2' => 'Tytuł, Sub-tytuł, Treść',
                                        '3' => 'Tytuł, Sub-tytuł, Treść, Button'
                                    ]])
                                </div>
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Tytuł', 'name' => 'modaltytul', 'value' => $entry->modaltytul, 'required' => 1])
                                </div>
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Sub-tytuł', 'name' => 'modaleditor', 'value' => $entry->modaleditor, 'required' => 1])
                                </div>
                                @if(Route::is('admin.developro.investment.section.edit') && $entry->type == 3)
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Button - adres URL', 'name' => 'modallink', 'value' => $entry->modallink, 'required' => 1])
                                </div>

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Button - treść', 'name' => 'modallinkbutton', 'value' => $entry->modallinkbutton, 'required' => 1])
                                </div>
                                @endif
                                <div class="row w-100 form-group">
                                    @include('form-elements.textarea-fullwidth', ['label' => 'Treść', 'name' => 'modaleditortext', 'value' => $entry->modaleditortext, 'rows' => 11, 'class' => 'tinymce', 'required' => 1])
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="investment_id" value="{{$investment->id}}">
                    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                </form>
        @include('form-elements.tintmce')
        @endsection
