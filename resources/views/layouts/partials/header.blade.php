<div class="header-holder">
    <header>
        <div class="container-fluid container-md">
            <div class="row">
                <div class="d-block d-md-none col-4">
                    <div id="mobileLogo">
                        <a href="/"><img src="{{asset('images/logo.svg')}}" alt="{{ settings()->get('page_title') }}"></a>
                    </div>
                </div>
                <div class="col-8 col-md-12 col-mobile-menu">
                    <nav>
                        <ul class="mb-0 list-unstyled d-flex justify-content-center">
                            <li class="gotsub">
                                <a href="/">O inwestycji</a>
                                <ul class="list-unstyled submenu mb-0">
                                    <li><a href="{{ route('front.packages') }}">Pakiet wykończeniowy</a></li>
                                    <li><a href="{{ route('front.financing') }}">Finansowanie</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::routeIs('front.developro.investment.index') ? 'active' : '' }}"><a href="{{ route('front.developro.investment.index') }}">Apartamenty</a></li>
                            <li class="{{ Request::routeIs('front.gallery') ? 'active' : '' }}"><a href="{{ route('front.gallery') }}">Galeria</a></li>
                            <li class="list-item-logo"><a href="/"><img src="{{asset('images/logo.svg')}}" alt="{{ settings()->get('page_title') }}"></a></li>
                            <li class="{{ Request::routeIs('front.lokalizacja') ? 'active' : '' }}"><a href="{{ route('front.lokalizacja') }}">Odkrywaj okolicę</a></li>
                            <li class="{{ Request::routeIs('front.investor') ? 'active' : '' }}"><a href="{{ route('front.investor') }}">Inwestor</a></li>
                            <li class="{{ Request::routeIs('front.contact.index') ? 'active' : '' }}"><a href="{{ route('front.contact.index') }}">Kontakt</a></li>
                            <li class="d-flex d-md-none"><a href="tel:+48883966866">+48 883 966 866</a></li>
                            <li class="d-flex d-md-none"><a href="mailto:sprzedaz@targowa49.pl">sprzedaz@targowa49.pl</a></li>
                        </ul>
                    </nav>
                    <div id="triggermenu" class="d-flex d-md-none">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="4" width="24" height="2" fill="white"/><rect y="11" width="24" height="2" fill="white"/><rect y="18" width="24" height="2" fill="white"/></svg> MENU
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
