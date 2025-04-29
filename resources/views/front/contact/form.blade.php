<div class="container">
    <div class="section-header text-center">
        <p class="section-header__subtitle">Kontakt z nami</p>
        <h1 class="section-header__title">Formularz kontaktowy</h1>
    </div>
    <div class="row">
        <div class="col-11 col-xxl-10 mx-auto cta__box">
            <img src="{{ asset('images/tlo-cta.jpg') }}" alt="budynek" class="cta__img-bg" width="295" height="510" loading="lazy">
            <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta__img" width="428" height="627" loading="lazy">
            <div class="row">
                <div class="col-xl-7">
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