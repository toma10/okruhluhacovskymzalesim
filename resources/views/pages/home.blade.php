@extends('layouts.app')

@section('hero')
    <div class="Hero">
        <ul class="bxslider">
            <li class="Hero__item-1"></li>
            <li class="Hero__item-2"></li>
            <li class="Hero__item-3"></li>
            <li class="Hero__item-4"></li>
        </ul>

        <div class="Countdown">
            <div class="Countdown__header">
                Do závodu zbýva
            </div>
            <ul class="Countdown__body">
                <li class="Countdown__item">
                    <p class="Countdown__days"></p>
                    <span>dní</span>
                </li>
                <li class="Countdown__item">
                    <p class="Countdown__hours"></p>
                    <span>hodin</span>
                </li>
                <li class="Countdown__item">
                    <p class="Countdown__minutes"></p>
                    <span>minut</span>
                </li>
                <li class="Countdown__item">
                    <p class="Countdown__seconds"></p>
                    <span>sekund</span>
                </li>
            </ul>
        </div>

        <a href="{{ url('vysledky') }}" class="Register">Aktuální vysledky</a>
@endsection

@section('content')
    <div class="Divider"></div>

    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">
                O závodu
            </h2>
            <p>Okruh Luhačovským Zálesím představuje do nedávna velmi dobře utajené Komonecké stezky.</p>
            <p>Atraktivní MTB terén závodu je určen zkušeným cyklistům, kteří se nebojí do trasy pořádně zakousnout.</p>
            <p>Nezapomínáme ale ani na trasy pro mladší jezdce a cyklistická batolata.</p>
            <p>Závod je součástí Valašskokarpatské Cyklotour 2017.</p>
            <img src="images/mapa.png" class="has-padding-top" alt="Mapa závodu">
        </div>
    </section>

    <section class="Section Section--is-dark Section--without-padding">
        <div class="container is-padingless">
            <div style=" position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                <iframe
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                    src="https://www.youtube.com/embed/uKuiWaqxkEQ?rel=0"
                    frameborder="0"
                    allowfullscreen
                >
                </iframe>
            </div>
        </div>
    </section>

    <section class="Section">
        <div class="container">
            <div class="Partners">
                <div class="Partners__header">
                    <h3 class="Partners__title">Hlavní Partneři</h3>
                </div>
                <div class="Partners__body">
                    <a class="Partners__item Partners--is-main" href="https://www.facebook.com/cyklotoulkyluhacovice/">
                        <img src="{{ asset('images/logos/logo-cyklotoulky.png') }}" alt="Cyklotoulky mikroregionem Luhačovské Zálesí">
                    </a>
                    <a class="Partners__item Partners--is-main" href="http://www.hotelvega.cz/">
                        <img src="{{ asset('images/logos/logo-vega.png') }}" alt="Hotel Vega">
                    </a>
                    <a class="Partners__item Partners--is-main" href="http://www.luhacovskezalesi.cz/">
                        <img src="{{ asset('images/logos/logo-luhacovskezalesi.png') }}" alt="http://www.luhacovskezalesi.cz/">
                    </a>
                </div>
            </div>

            <div class="Partners">
                <div class="Partners__header">
                    <h3 class="Partners__title">Partneři</h3>
                </div>
                <div class="Partners__body">
                    <a class="Partners__item" href="http://www.hotelalexandria.cz/">
                        <img src="{{ asset('images/logos/logo-alexandria.png') }}" alt="Hotel ALEXANDRIA****">
                    </a>
                    <a class="Partners__item" href="http://www.hotel-ambra.cz/">
                        <img src="{{ asset('images/logos/logo-ambra.png') }}" alt="HOTEL AMBRA rezidence">
                    </a>
                    <a class="Partners__item" href="http://www.augustian.cz/">
                        <img src="{{ asset('images/logos/logo-augustianskydum.png') }}" alt="Hotel Augustiniánský dům">
                    </a>
                    <a class="Partners__item" href="http://avonet.cz/">
                        <img src="{{ asset('images/logos/logo-avonet.png') }}" alt="AVONET | internet, televize, volání">
                    </a>
                    <a class="Partners__item" href="http://www.autocalifornia.cz/">
                        <img src="{{ asset('images/logos/logo-autocalifornia.png') }}" alt="Autobazar CALIFORNIA - Autobazar CALIFORNIA Luhačovice">
                    </a>
                    <a class="Partners__item" href="http://www.craft.cz/">
                        <img src="{{ asset('images/logos/logo-craft.png') }}" alt="Craft">
                    </a>
                    <a class="Partners__item" href="https://www.facebook.com/cyklopomocnik">
                        <img src="{{ asset('images/logos/logo-cyklopomocnik.png') }}" alt="Cyklopomocník">
                    </a>
                    <a class="Partners__item" href="#">
                        <img src="{{ asset('images/logos/logo-mias.png') }}" alt="Cykloservis Martin Mikulec">
                    </a>
                    <a class="Partners__item" href="http://www.cyklotrenink.com">
                        <img src="{{ asset('images/logos/logo-cyklotrenink.png') }}" alt="Cyklotrenink.com - tréninkové plány pro každého cyklistu">
                    </a>
                    <a class="Partners__item" href="http://www.drevovyrobaludkovice.cz/">
                        <img src="{{ asset('images/logos/logo-drevovyroba.png') }}" alt="Dřevovýroba Ludkovice">
                    </a>
                    <a class="Partners__item" href="#">
                        <img src="{{ asset('images/logos/logo-coufalikelektro.png') }}" alt="Coufalík Elektro">
                    </a>
                    <a class="Partners__item" href="#">
                        <img src="{{ asset('images/logos/logo-energoservis.png') }}" alt="energoservis">
                    </a>
                    <a class="Partners__item" href="https://www.groz-beckert.com/">
                        <img src="{{ asset('images/logos/logo-gb.png') }}" alt="Groz-Beckert">
                    </a>
                    <a class="Partners__item" href="http://www.vybirejte-srdcem.cz/">
                        <img src="{{ asset('images/logos/logo-hello.png') }}" alt="Hello">
                    </a>
                    <a class="Partners__item" href="http://www.intaktdent.eu/">
                        <img src="{{ asset('images/logos/logo-intakt.png') }}" alt="IntaktDent">
                    </a>
                    <a class="Partners__item" href="http://www.kare.cz/">
                        <img src="{{ asset('images/logos/logo-kare.png') }}" alt="Lázeňské oplatky KARE">
                    </a>
                    <a class="Partners__item" href="http://www.kofola.cz/">
                        <img src="{{ asset('images/logos/logo-kofola.png') }}" alt="Kofola">
                    </a>
                    <a class="Partners__item" href="https://www.lafood.cz/">
                        <img src="{{ asset('images/logos/logo-lafood.png') }}" alt="LA Food specialista na těstoviny, rýži a luštěniny">
                    </a>
                    <a class="Partners__item" href="https://www.makro.cz/">
                        <img src="{{ asset('images/logos/logo-makro.png') }}" alt="MAKRO | Velkoobchod potravin a dalšího zboží">
                    </a>
                    <a class="Partners__item" href="http://www.ortoline.cz/">
                        <img src="{{ asset('images/logos/logo-ortoline.png') }}" alt="Ortoline Luhačovice">
                    </a>
                    <a class="Partners__item" href="http://www.pozlovice.cz/">
                        <img src="{{ asset('images/logos/logo-mestyspozlovice.png') }}" alt="Městys Pozlovice">
                    </a>
                    <a class="Partners__item" href="https://www.penzionuhraze.cz/">
                        <img src="{{ asset('images/logos/logo-penzionuhraze.png') }}" alt="Penzion U Hráze">
                    </a>
                    <a class="Partners__item" href="http://www.pohoda-luhacovice.cz/">
                        <img src="{{ asset('images/logos/logo-pohoda.png') }}" alt="Wellness Hotel Pohoda ****">
                    </a>
                    <a class="Partners__item" href="http://www.hotelradun.cz/">
                        <img src="{{ asset('images/logos/logo-radun.png') }}" alt="Hotel Radun">
                    </a>
                    <a class="Partners__item" href="#">
                        <img src="{{ asset('images/logos/logo-sanitacar.png') }}" alt="SANITA CAR Holešov">
                    </a>
                    <a class="Partners__item" href="http://www.nadacedks.cz/">
                        <img src="{{ asset('images/logos/logo-synot.png') }}" alt="NADACE Synot">
                    </a>
                    <a class="Partners__item" href="http://www.tksport-ub.cz/">
                        <img src="{{ asset('images/logos/logo-tksport.png') }}" alt="TK Sport">
                    </a>
                    <a class="Partners__item" href="http://www.hotel-viola.cz/">
                        <img src="{{ asset('images/logos/logo-viola.png') }}" alt="Hotel VILA VIOLA****">
                    </a>
                    <a class="Partners__item" href="http://www.vyhlidka.eu/">
                        <img src="{{ asset('images/logos/logo-vyhlidka.png') }}" alt="Hotel Vyhlídka">
                    </a>
                    <a class="Partners__item" href="http://www.zlinska50.cz/">
                        <img src="{{ asset('images/logos/logo-zlinska50.png') }}" alt="Zlínská 50 - Závod horských kol">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('afterScripts')
    <script src="{{ mix('js/home.js') }}"></script>
@endpush
