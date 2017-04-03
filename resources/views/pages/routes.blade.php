@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title">Trasy</h2>
            <p class="has-padding-bottom">Do termínu realizace závodu probíhají na trase závodu lesní práce, vstup pouze na vlastní nebezpečí.</p>
            <h3 class="is-title has-padding-bottom">Kategorie OPEN</h3>
            <a href="https://mapy.cz/s/1PWxK" target="_blank">
                <img src="{{ asset('images/mapa-open.jpg') }}" class="lighten has-shadow" alt="Mapa kategorie OPEN">
            </a>

            <h3 class="is-title has-padding-top has-padding-bottom">Kategorie SUPERJUNIOR &ndash; SJ1 + SJ2</h3>
            <a href="https://mapy.cz/s/1KM72" target="_blank">
                <img src="{{ asset('images/mapa-superjunior-1.jpg') }}" class="lighten has-shadow" alt="Mapa kategorie SUPERJUNIOR &ndash; SJ1 + SJ2">
            </a>

            <h3 class="is-title has-padding-top has-padding-bottom">Kategorie SUPERJUNIOR &ndash; SJ3 + SJ4</h3>
            <a href="https://mapy.cz/s/1KM8g" target="_blank">
                <img src="{{ asset('images/mapa-superjunior-2.jpg') }}" class="lighten has-shadow" alt="Mapa kategorie SUPERJUNIOR &ndash; SJ3 + SJ4">
            </a>
        </div>
    </section>
@endsection
