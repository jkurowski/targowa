@props([
    'pageTitle' => $pageTitle ?? 'Kontakt',
    'investmentName' => $investmentName ?? null,
    'investmentId' => $investmentName ?? null,
    'propertyId' => $propertyId ?? null,
    'back' => $back ?? false,
    'method' => 'POST',
])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if($propertyId)
    <form id="contactForm" autocomplete="off" action="{{route('front.contact.property', $propertyId)}}" method="{{ $method }}" class="contact-form row validateForm p-4">
        @else
            <form id="contactForm" autocomplete="off" action="{{ route('front.contact.send') }}" method="{{ $method }}" class="contact-form row validateForm">
                @endif
                {{ csrf_field() }}
                @if($investmentId)
                    <input name="investment_id" type="hidden" value="{{ $investmentId }}">
                @endif

                @if($investmentName)
                    <input name="investment_name" type="hidden" value="{{ $investmentName }}">
                @endif

                @if($back)
                    <input name="back" type="hidden" value="{{ $back }}">
                @endif

                <input type="hidden" name="page" value="{{ $pageTitle }}">
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
                <div class="col-12 col-sm-6  mb-2 mb-sm-4">
                    <label for="name" class="lab-anim">Imię</label>
                    <input name="form_name" type="text" class="form-control validate[required] @error('form_name') is-invalid @enderror" id="name" value="{{ old('form_name') }}">
                    @error('form_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6  mb-2 mb-sm-4">
                    <label for="phone" class="lab-anim">Telefon</label>
                    <input name="form_phone" type="tel" class="form-control validate[required] @error('form_phone') is-invalid @enderror" id="phone" value="{{ old('form_phone') }}">
                    @error('form_phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col-12 mb-2 mb-sm-4">
                    <label for="email" class="lab-anim">Adres e-mail</label>
                    <input name="form_email" type="email" class="form-control validate[required] @error('form_email') is-invalid @enderror" id="email" value="{{ old('form_email') }}">
                    @error('form_email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col-12 mb-2 mb-sm-4 box-anim">
                    <label for="Message" class="lab-anim">Wiadomość</label>
                    <textarea id="Message" name="form_message" class="form-control validate[required] @error('form_message') is-invalid @enderror" rows="2" maxlength="3000" required style="height: 180px"></textarea>
                    @error('form_message')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col-12 rodo">
                    <p>Na podstawie z art. 13 ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r. (Dz. Urz. UE L 119 z 04.05.2016) informujemy, iż przesyłając wiadomość za pomocą formularza kontaktowego wyrażacie Państwo zgodę na:</p>
                </div>
                @foreach ($rules as $r)
                    <div class="mb-3 form-check position-relative @error('rule_'.$r->id) is-invalid @enderror">
                        <input name="rule_{{$r->id}}" type="checkbox" class="form-check-input @if($r->required === 1) validate[required] @endif" id="rule_{{$r->id}}" data-prompt-position="topLeft:-25px">
                        <label class="form-check-label form-check-label--check" for="rule_{{$r->id}}">{!! $r->text !!}</label>
                        @error('rule_'.$r->id)
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                @endforeach

                <div class="col-12 text-start">
                    <input name="form_page" type="hidden" value="{{ $pageTitle }}">
                    <script type="text/javascript">
                        @if(config('services.recaptcha.v3_site_key') && config('services.recaptcha.v3_secret_key'))
                        document.write("<button type=\"submit\" class=\"bttn-big mt-0 g-recaptcha\" data-sitekey=\"{{ config('services.recaptcha.v3_site_key') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\">WYŚLIJ</button>");
                        @else
                        document.write("<button class=\"bttn-big mt-0\" type=\"submit\">WYŚLIJ</button>");
                        @endif
                    </script>
                    <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                </div>
            </form>

            @push('scripts')
                <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
                <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".validateForm").validationEngine({
                            validateNonVisibleFields: true,
                            updatePromptsPosition:true,
                            promptPosition : "topRight:-137px",
                            autoPositionUpdate: false
                        });
                    });

                    function onRecaptchaSuccess(token) {
                        $(".validateForm").validationEngine('updatePromptsPosition');
                        const isValid = $(".validateForm").validationEngine('validate');
                        if (isValid) {
                            $("#contactForm").submit();
                        } else {
                            grecaptcha.reset();
                        }
                    }
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
