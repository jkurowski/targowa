@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $investment->floor->name)
@section('seo_title', $page->meta_title.' - '.$investment->floor->name)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $investment->floor->name, 'header_file' => 'rooms.jpg', 'items' => [['uri'=> 'mieszkania', 'title'=>'Mieszkania']]])
@stop

@section('content')

@endsection
@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
