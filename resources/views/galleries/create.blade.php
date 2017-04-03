@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Vytvořit galerie</h2>
            <form class="Form" method="POST" action="{{ route('galleries.store') }}">
                {{ csrf_field() }}

                <div class="Form__group{{ $errors->has('year') ? ' has-error' : '' }}">
                    <label for="year" class="Form__label">Rok:</label>

                    <input id="year" type="text" class="Form__control" name="year" value="{{ old('year') }}" required autofocus>
                    @if ($errors->has('year'))
                        <span class="help-block">{{ $errors->first('year') }}</span>
                    @endif
                </div>

                <div class="Form__group">
                    <button type="submit" class="Button">Vytvořit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
