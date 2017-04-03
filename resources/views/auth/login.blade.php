@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">Přihlášení</h2>
            <form class="Form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="Form__group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="Form__label">Email:</label>

                    <input id="email" type="email" class="Form__control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="Form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="Form__label">Heslo:</label>

                    <input id="password" type="password" class="Form__control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="Form__group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamatovat
                        </label>
                    </div>
                </div>

                <div class="Form__group">
                    <button type="submit" class="Button">Přihlásit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
