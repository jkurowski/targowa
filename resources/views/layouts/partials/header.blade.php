<div class="header-holder">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="mb-0 list-unstyled d-flex justify-content-center">
                        <li><a href="/">O inwestycji</a></li>
                        <li class="{{ Request::routeIs('front.developro.investment.index') ? 'active' : '' }}"><a href="{{ route('front.developro.investment.index') }}">Apartamenty</a></li>
                        <li class="{{ Request::routeIs('front.gallery') ? 'active' : '' }}"><a href="{{ route('front.gallery') }}">Galeria</a></li>
                        <li><a href="/"><img src="{{asset('images/logo.svg')}}" alt="{{ settings()->get('page_title') }}"></a></li>
                        <li class="{{ Request::routeIs('front.lokalizacja') ? 'active' : '' }}"><a href="{{ route('front.lokalizacja') }}">Odkrywaj okolicę</a></li>
                        <li class="{{ Request::routeIs('front.investor') ? 'active' : '' }}"><a href="{{ route('front.investor') }}">Inwestor</a></li>
                        <li class="{{ Request::routeIs('front.contact.index') ? 'active' : '' }}"><a href="{{ route('front.contact.index') }}">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
