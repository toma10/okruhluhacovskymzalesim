@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Galerie</h2>
            <div class="Gallery">
                @if (Auth::check())
                    <a href="{{ route('galleries.create') }}" class="Gallery__create">
                        <img src="/images/add.svg" alt="Přidat">
                    </a>
                @endif
                @forelse($galleries as $gallery)
                    <a href="{{ route('galleries.show', $gallery) }}" class="Gallery__item">
                        @if ($gallery->photos->count())
                            <img class="Gallery__image" src="{{ $gallery->photos->first()->thumbnail_path }}" alt="Fotogalerie">
                        @endif
                        @if (Auth::check())
                            <form class="Gallery__delete-form" method="POST" action="{{ route('galleries.destroy', $gallery) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="Button">Smazat</button>
                            </form>
                        @endif
                        <div class="Gallery__header">
                            Fotogalerie {{ $gallery->year }}
                        </div>
                    </a>
                @empty
                    <h4>Zatím nebyla vytvořena žádná galerie</h4>
                @endforelse
            </div>
        </div>
    </section>
@endsection
