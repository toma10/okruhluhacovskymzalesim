<header class="{{ Request::is('/') ? 'Header' : '' }}">
    <div class="Navbar">
        <div class="container">
            <a class="Logo" href="{{ url('/') }}">
                <h1>Okruh Luhačovským Zálesím</h1>
            </a>

            <div class="Nav-trigger">
                <span></span>
            </div>

            <nav>
                <ul class="Nav">
                    <li class="Nav__item">
                        <a class="Nav__link{{ Request::is('/') ? ' Nav__link--active' : '' }}" href="{{ url('/') }}">Domů</a>
                    </li>
                    <li class="Nav__item">
                        <a class="Nav__link{{ Request::is('registrace') ? ' Nav__link--active' : '' }}" href="{{ url('registrace') }}">Registrace</a>
                    </li>
                    <li class="Nav__item">
                        <a class="Nav__link{{ Request::is('propozice') ? ' Nav__link--active' : '' }}" href="{{ url('propozice') }}">Propozice</a>
                    </li>
                    <li class="Nav__item">
                        <a class="Nav__link{{ Request::is('trasy') ? ' Nav__link--active' : '' }}" href="{{ url('trasy') }}">Trasy</a>
                    </li>
                    <li class="Nav__item">
                        <a class="Nav__link{{ Request::is('vysledky') ? ' Nav__link--active' : '' }}" href="{{ url('vysledky') }}">Výsledky</a>
                    </li>
                    <li class="Nav__item">
                        <a class="Nav__link{{ Request::is('galerie') ? ' Nav__link--active' : '' }}" href="{{ url('galerie') }}">Galerie</a>
                    </li>
                    <li class="Nav__item">
                        <a class="Nav__link" href="https://www.facebook.com/okruhlz" target="_blank">
                            <img src="/images/facebook.svg" alt="Závod Luhačovským Zálesím na Facebooku">
                        </a>
                    </li>
                    @if (Auth::check())
                        <li class="Nav__item">
                            <a class="Nav__link" href="{{ route('logout') }}">Odhlásit se</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

    @yield('hero')

    </div>
</header>
