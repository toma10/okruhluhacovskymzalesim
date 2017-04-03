@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Výsledky</h2>
            <div class="Columns">
                <div class="Column">
                    <h3 class="is-title">2016</h3>
                    <ul class="Category">
                        <li class="Category__header">Open</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut"></span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen.pdf') }}" target="_blank">
                                        <span class="Category__description">Absolutní pořadí</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">MJ</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_mj.pdf') }}" target="_blank">
                                        <span class="Category__description">DOROST MUŽI (muži 15 až 17 let), ročník 2001 až 1999</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M1</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_m1.pdf') }}" target="_blank">
                                        <span class="Category__description">MUŽI 1 (muži 18 až 39 let), ročník 1998 až 1977</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M2</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_m2.pdf') }}" target="_blank">
                                        <span class="Category__description">MUŽI 2 (muži 40 až 49 let), ročník 1976 až 1967</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M3</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_m3.pdf') }}" target="_blank">
                                        <span class="Category__description">MUŽI 3 (muži 50 let a starší), ročník 1966 a starší</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">ZJ</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_zj.pdf') }}" target="_blank">
                                        <span class="Category__description">DOROST ŽENY (ženy 15 až 17 let), ročník 2001 až 1999</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">Z1</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_z1.pdf') }}" target="_blank">
                                        <span class="Category__description">ŽENY 1 (ženy 18 až 39 let), ročník 1998 až 1977</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">Z2</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodopen_z2.pdf') }}" target="_blank">
                                        <span class="Category__description">ŽENY 2 (ženy 40 let a starší), ročník 1976 a starší</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">SuperJunior</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ1</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodsuperjunior_sj1.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ ŽÁCI (chlapci 11 až 12 let), ročník 2004 a 2005</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ2</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodsuperjunior_sj2.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ ŽAČKY (děvčata 11 až 12 let), ročník 2004 a 2005</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ3</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodsuperjunior_sj3.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ ŽÁCI (chlapci 13 až 14 let), ročník 2002 a 2003</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ4</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodsuperjunior_sj4.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ ŽAČKY (děvčata 13 až 14 let), ročník 2002 a 2003</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Junior</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">J1</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodjunior_j1.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ PŘÍPRAVKA (chlapci 7 až 8 let), ročník 2008 a 2009</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J2</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodjunior_j2.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ PŘÍPRAVKA (děvčata 7 až 8 let), ročník 2008 a 2009</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J3</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodjunior_j3.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ PŘÍPRAVKA (chlapci 9 až 10 let), ročník 2006 a 2007</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J4</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodjunior_j4.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ PŘÍPRAVKA (děvčata 9 až 10 let), ročník 2006 a 2007</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Bejby</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">B1</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodbaby_b1.pdf') }}" target="_blank">
                                        <span class="Category__description">PŘEDŠKOLÁCI 1 (chlapci + děvčata do 4 let), ročník 2012 a mladší</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">B2</span>
                                    <a class="Category__description" href="{{ asset('results/2016/zavodbaby_b2.pdf') }}" target="_blank">
                                        <span class="Category__description">PŘEDŠKOLÁCI 2 (chlapci + děvčata 5 až 6 let), ročník 2011 a 2010</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="Column">
                    <h3 class="is-title">2015</h3>
                    <ul class="Category">
                        <li class="Category__header">Open</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">MJ</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_mj.pdf') }}" target="_blank">
                                        <span class="Category__description">DOROST MUŽI (muži 15 až 17 let), ročník 2000 až 1998</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M1</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_m1.pdf') }}" target="_blank">
                                        <span class="Category__description">MUŽI 1 (muži 18 až 39 let), ročník 1997 až 1976</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M2</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_m2.pdf') }}" target="_blank">
                                        <span class="Category__description">MUŽI 2 (muži 40 až 49 let), ročník 1975 až 1966</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">M3</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_m3.pdf') }}" target="_blank">
                                        <span class="Category__description">MUŽI 3 (muži 50 let a starší), ročník 1965 a starší</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">ZJ</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_zj.pdf') }}" target="_blank">
                                        <span class="Category__description">DOROST ŽENY (ženy 15 až 17 let), ročník 2000 až 1998</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">Z1</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_z1.pdf') }}" target="_blank">
                                        <span class="Category__description">ŽENY 1 (ženy 18 až 39 let), ročník 1997 až 1976</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">Z2</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodopen_z2.pdf') }}" target="_blank">
                                        <span class="Category__description">ŽENY 2 (ženy 40 let a starší), ročník 1975 a starší</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">SuperJunior</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ1</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodsuperjunior_sj1.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ ŽÁCI (chlapci 11 až 12 let), ročník 2003 a 2004</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ2</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodsuperjunior_sj2.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ ŽAČKY (děvčata 11 až 12 let), ročník 2003 a 2004</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ3</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodsuperjunior_sj3.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ ŽÁCI (chlapci 13 až 14 let), ročník 2001 a 2002</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">SJ4</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodsuperjunior_sj4.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ ŽAČKY (děvčata 13 až 14 let), ročník 2001 a 2002</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Junior</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">J1</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodjunior_j1.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ PŘÍPRAVKA (chlapci 7 až 8 let), ročník 2007 a 2008</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J2</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodjunior_j2.pdf') }}" target="_blank">
                                        <span class="Category__description">MLADŠÍ PŘÍPRAVKA (děvčata 7 až 8 let), ročník 2007 a 2008</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J3</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodjunior_j3.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ PŘÍPRAVKA (chlapci 9 až 10 let), ročník 2005 a 2006</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">J4</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodjunior_j4.pdf') }}" target="_blank">
                                        <span class="Category__description">STARŠÍ PŘÍPRAVKA (děvčata 9 až 10 let), ročník 2005 a 2006</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="Category__header">Bejby</li>
                        <li>
                            <ul class="Category__sub">
                                <li class="Category__item">
                                    <span class="Category__shortcut">B1</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodbaby_b1.pdf') }}" target="_blank">
                                        <span class="Category__description">PŘEDŠKOLÁCI 1 (chlapci + děvčata do 4 let), ročník 2011 a mladší</span>
                                    </a>
                                </li>
                                <li class="Category__item">
                                    <span class="Category__shortcut">B2</span>
                                    <a class="Category__description" href="{{ asset('results/2015/zavodbaby_b2.pdf') }}" target="_blank">
                                        <span class="Category__description">PŘEDŠKOLÁCI 2 (chlapci + děvčata 5 až 6 let), ročník 2010 a 2009</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
