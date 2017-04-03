@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Kategorie</h2>
            <div class="Columns">
                <div class="Column">
                    <h3 class="is-title">Open</h3>
                    <ul class="Category">
                        <li class="Category__header">Start</li>
                        <li>22. 7. 2017 v 12:30 hod. (společný start)</li>
                        <li class="Category__header">Trasa</li>
                        <li>40 km (15 % asfalt, 85 % terén, převýšení 1400 m)</li>
                        <li class="Category__header">Startové</li>
                        <li>350 Kč při přihlášení a zaplacení startovného do 19. 7. 2017, v ceně kompresní návleky HAVEN (<a href="https://www.haven.cz/eshop/ponozky/navleky-black-white/">muži</a>, <a href="http://www.global-sport.cz/navleky-haven-guard-evotec-cernoruzove">ženy</a>), startovní číslo, jídlo na trati i v cíli</li>
                        <li>450 Kč při registraci na místě, v ceně startovní číslo, jídlo na trati i v cíli, bez nároku na kompresní návleky</li>
                        <li class="Category__header">Jednotlivé kategorie</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">MJ</span>
                                    <span class="Category__description">DOROST MUŽI (muži 15 až 17 let) ročník 2002 až 2000</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M1</span>
                                    <span class="Category__description">MUŽI 1 (muži 18 až 39 let) ročník 1999 až 1978</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M2</span>
                                    <span class="Category__description">MUŽI 2 (muži 40 až 49 let) ročník 1977 až 1968</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M3</span>
                                    <span class="Category__description">MUŽI 3 (muži 50 let a starší) ročník 1967 a starší</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">ZJ</span>
                                    <span class="Category__description">DOROST ŽENY (ženy 15 až 17 let) ročník 2002 až 2000</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">Z1</span>
                                    <span class="Category__description">ŽENY 1 (ženy 18 až 39 let), ročník 1999 až 1978</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">Z2</span>
                                    <span class="Category__description">ŽENY 2 (ženy 40 let a starší) ročník 1977 a starší</span>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Před startem</li>
                        <li>Číslo + čip (201 – 600)</li>
                        <li>Poukaz na jídlo + info tombola</li>
                        <li class="Category__header">Po dojezdu</li>
                        <li>Věcné ceny pouze první 3 v kategorii a NEJ muž a žena, věkově nejstarší muž a žena</li>
                    </ul>
                </div>
                <div class="Column">
                    <h3 class="is-title">Superjunior</h3>
                    <ul class="Category">
                        <li class="Category__header">Start</li>
                        <li>22. 7. 2017 v 11:00 hod. (společný start SJ1 + SJ2 &ndash; SJ3 + SJ4)</li>
                        <li class="Category__header">Trasa</li>
                        <li>6 až 12 km (20 % asfalt, 80 % terén)</li>
                        <li class="Category__header">Startové</li>
                        <li>100 Kč při registraci on-line a platbě do 19. 7. 2017</li>
                        <li>150 Kč při registraci on-line nebo v den závodu, platba po 19. 7. 2017</li>
                        <li class="Category__header">Jednotlivé kategorie</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ1</span>
                                    <span class="Category__description">6 km, MLADŠÍ ŽÁCI (chlapci 11 až 12 let) ročník 2006 a 2005</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ2</span>
                                    <span class="Category__description">6 km, MLADŠÍ ŽAČKY (děvčata 11 až 12 let) ročník 2006 a 2005</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ3</span>
                                    <span class="Category__description">12 km, STARŠÍ ŽÁCI (chlapci 13 až 14 let) ročník 2004 a 2003</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ4</span>
                                    <span class="Category__description">12 km, STARŠÍ ŽAČKY (děvčata 13 až 14 let) ročník 2004 a 2003</span>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Před startem</li>
                        <li>Číslo + čip (101 – 200)</li>
                        <li class="Category__header">Po dojezdu</li>
                        <li>Věcné ceny a medaili pouze první 3 v kategorii</li>
                    </ul>
                </div>

                <div class="Column">
                    <h3 class="is-title">Junior</h3>
                    <ul class="Category">
                        <li class="Category__header">Start</li>
                        <li>22. 7. 2017 v 11:05 hod. (společný start J1 + J2 &ndash; J3 + J4)</li>
                        <li class="Category__header">Trasa</li>
                        <li>1,5 až 3 km (20 % asfalt, 80 % terén)</li>
                        <li class="Category__header">Startové</li>
                        <li>50 Kč při registraci on-line a platbě do 19. 7. 2017</li>
                        <li>100 Kč při registraci on-line nebo v den závodu, platba po 19. 7. 2017</li>
                        <li class="Category__header">Jednotlivé kategorie</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">J1</span>
                                    <span class="Category__description">1,5 km, MLADŠÍ PŘÍPRAVKA (chlapci 7 až 8 let) ročník 2009 a 2010</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J2</span>
                                    <span class="Category__description">1,5 km, MLADŠÍ PŘÍPRAVKA (děvčata 7 až 8 let) ročník 2009 a 2010</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J3</span>
                                    <span class="Category__description">3 km, STARŠÍ PŘÍPRAVKA (chlapci 9 až 10 let) ročník 2007 a 2008</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J4</span>
                                    <span class="Category__description">3 km, STARŠÍ PŘÍPRAVKA (děvčata 9 až 10 let) ročník 2007 a 2008</span>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Před startem</li>
                        <li>Číslo + čip (101 – 200)</li>
                        <li class="Category__header">Po dojezdu</li>
                        <li>Věcné ceny a medaili pouze první 3 v kategorii</li>
                    </ul>
                </div>
                <div class="Column">
                    <h3 class="is-title">Bejby</h3>
                    <ul class="Category">
                        <li class="Category__header">Start</li>
                        <li>22. 7. 2017 v 10:00 hod. (start B1 &ndash; start B2)</li>
                        <li class="Category__header">Trasa</li>
                        <li>0,25 až 0,5 km (100 % terén)</li>
                        <li class="Category__header">Startové</li>
                        <li>50 Kč, registrace je možná pouze v den závodu</li>
                        <li class="Category__header">Jednotlivé kategorie</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">B1</span>
                                    <span class="Category__description">0,25 km, PŘEDŠKOLÁCI 1 (chlapci + děvčata do 4 let) ročník 2013 a mladší</span>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">B2</span>
                                    <span class="Category__description">0,5 km, PŘEDŠKOLÁCI 2 (chlapci + děvčata 5 až 6 let) ročník 2012 a 2011</span>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Před startem</li>
                        <li>Číslo bez čipu (1 – 100)</li>
                        <li class="Category__header">Po dojezdu</li>
                        <li>Věcné ceny a medaili pouze první 3 v kategorii</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="Section Section--without-padding">
        <div id="map" class="Map"></div>
    </section>

    <section class="Section">
        <div class="container">
            <h2 class="is-title">Sobota 22. 7. 2017</h2>
            <h4>Areál Hotelu Vega, Pozlovice, Luhačovice</h4>

            <h3 class="is-title has-padding-top">Pořadatel</h3>
            <h4>František Divoký</h4>

            <h3 class="is-title has-padding-top">Hlavní partneři</h3>
            <h4>Cyklotoulky Luhačovským Zálesím</h4>
            <h4>Luhačovské Zálesí, o.p.s.</h4>
            <h4>Hotel Vega s.r.o.</h4>
        </div>
    </section>

    <section id="program" class="Section Section--is-dark">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Program</h2>

            <h4 class="is-title has-padding-bottom">Areál Hotelu Vega</h4>
            <p>9:00 – 12:00 prezence všech závodníků</p>
            <br>
            <p>10:00 start trasy BEJBY – kateg. B1 + B2 </p>
            <p>10:30 vyhlášení BEJBY – kateg. B1 + B2</p>
            <p class="muted">(čas je orientační, bude se vyhlašovat po dojezdu závodů)</p>
            <br>
            <p>11:00 start trasy SUPERJUNIOR – kateg. S1 + SJ2 &ndash; SJ3 + SJ4</p>
            <p>11:05 start trasy JUNIOR – kateg. J1 + J2 &ndash; J3 + J4</p>
            <br>
            <p>12:15 představení trasy OPEN</p>
            <h4>12:30 start trasy ZÁVODU OPEN</h4>
            <br>
            <p>12:45 vyhlášení JUNIOR – kateg. J1 + J2 &ndash; J3 + J4</p>
            <p>12:50 vyhlášení SUPERJUNIOR – kateg. SJ1 + SJ2 &ndash; SJ3 + SJ4 </p>
            <p class="muted">(čas je orientační)</p>
            <br>
            <p>14:15 předpokládaný dojezd prvních závodníků na trase OPEN</p>
            <p>15:30 předpokládaný dojezd posledních závodníků na trase OPEN</p>
            <h4>16:00 vyhlášení VÝSLEDKŮ OPEN + ABSOLUTNĚ</h4>
            <br>
            <p>16:30 TOMBOLA</p>
        </div>
    </section>

    <section class="Section">
        <div class="container">
            <h3 class="is-title">Občerstvení</h3>
            <p>Pouze na trase Open: 1x na trati &ndash; občerstvovací stanice</p>
            <p>Po závodě &ndash; jídlo a pití</p>

            <h3 class="is-title has-padding-top">Ceny</h3>
            <p>Závodníci ve všech kategoriích na 1. až 3. místě obdrží diplomy a věcné ceny.</p>

            <h3 class="is-title has-padding-top">Registrace</h3>
            <p><a href="{{ url('registrace') }}">On-line</a> do 19. 7. 2017 nebo osobně v den závodu při prezenci.</p>

            <p>Pokud účastník uvede při registraci své telefonní číslo, budou mu zaslány formou SMS zprávy údaje o umístnění v závodě (týká se závodníků na trasách Open).</p>

            <p>Závodníci, kteří se zaregistují on-line, obdrží věcnou cenu.</p>

            <h3 class="is-title has-padding-top">Právní ujednání</h3>
            <p>Zaslání přihlášky prostřednictvím internetu (on-line registrace) nahrazují písemný podpis účastníka na papírové přihlášce.</p>
            <p>Za start závodníka mladšího 18 let nese odpovědnost jeho zákonný zástupce, v tomto případě vyžadujeme u prezentace písemný souhlas zákonného zástupce.</p>
            <p>Všichni přihlášení startují na vlastní nebezpečí, včetně posouzení připravenosti na závod.</p>
            <p>Pořadatel nehradí škody na zdraví a majetku vzniklé účastníkům v souvislosti se závodem.</p>
            <p>Dle vlastního uvážení je pro závod povoleno funkční horské nebo trekingové kolo s dvěma na sobě nezávislými brzdami.</p>
            <p>Závodník musí být vybaven bezpečnostní cyklistickou přilbou, kterou musí mít nasazenu na hlavě po celou dobu závodu.</p>
            <p>Závod se jede za plného silničního provozu.</p>
            <p>Klasifikováni budou pouze závodníci, kteří projedou celou trať.</p>
            <p>Pořadatel může použít mnou poskytnutá data pro potřeby tohoto závodu s tím, že budou náležitě chráněna ve smyslu §11 zákona č.101/2000 Sb.</p>

            <h3 class="is-title has-padding-top">Různé</h3>
            <p>Závod je veřejný s hromadným startem, uskuteční se za každého počasí.</p>
            <p>Závod předškoláků bude probíhat za doprovodu rodičů.</p>

            <h3 class="is-title has-padding-top">Ubytování</h3>
            <p><a href="http://www.hotelvega.cz">Hotel Vega, Pozlovice 99, Luhačovice</a></p>

            <h3 class="is-title has-padding-top has-padding-bottom">Kontakty</h3>
            <table class="table table--center contacts">
                <thead>
                    <tr>
                        <th>Jméno</th>
                        <th>Telefon</th>
                        <th>Místo</th>
                        <th>Pozice</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>František Divoký</td>
                        <td>739344010</td>
                        <td>Trasa</td>
                        <td>Organizace, značení</td>
                    </tr>
                    <tr>
                        <td>Roman Kašpar</td>
                        <td>774230210</td>
                        <td>Hřiště</td>
                        <td>Moderátor, organizace</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

@push('afterScripts')
    <script>
        function initMap() {
            var hotelVega = {
                lat: 49.137906,
                lng: 17.781690
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: hotelVega,
                scrollwheel: false,
                gestureHandling: 'cooperative'
            });

            var marker = new google.maps.Marker({
                position: hotelVega,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBieEpL9LBbIsmNAecVKkAleOPWm6XUMew&callback=initMap"></script>
@endpush
