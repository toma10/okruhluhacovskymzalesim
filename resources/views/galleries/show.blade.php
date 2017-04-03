@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Fotogalerie {{ $gallery->year }}</h2>
            <div class="Gallery">
                @forelse ($photos as $photo)
                    <div class="Gallery__item">
                        @if (Auth::check())
                            <form class="Gallery__delete-form" method="POST" action="{{ route('photos.destroy', [$gallery, $photo]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="Button">Smazat</button>
                            </form>
                        @endif
                        <a href="{{ asset($photo->path) }}" data-lightbox="Fotogalerie">
                            <img class="Gallery__image" src="{{ asset($photo->thumbnail_path) }}" alt="Fotografie">
                        </a>
                    </div>
                @empty
                    <h4>Zatím nebyla vložena zádná fotografie</h4>
                @endforelse
            </div>
            {{ $photos->links() }}

            @if (Auth::check())
                <form action="{{ route('photos.store', $gallery) }}" class="dropzone" id="dropzone">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </section>
@endsection

@push('afterStylesheets')
    <link rel="stylesheet" href="{{ asset('css/gallery-vendor.css') }}">
@endpush

@push('afterScripts')
    <script src="{{ asset('js/gallery-vendor.js') }}"></script>
    <script>
        lightbox.option({
          'albumLabel': "Fotografie %1 z %2",
        })

        @if (Auth::check())
            Dropzone.options.dropzone = {
                paramName: 'photo',
                maxFilesize: 3,
                acceptedFiles: 'image/jpeg,image/jpg,image/png',
                dictDefaultMessage: 'Nahrát fotografie...',
            };
        @endif
    </script>
@endpush
