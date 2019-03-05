@extends('layouts.app')
@section('css')
<link href="css/signin.css" rel="stylesheet">
@endsection
@section('content')
<header>
    <h1>Laravel</h1>
</header>
<section class="signin">
    <div class="form">
        <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
            <input type="text" type="email" name="email" value="{{ old('email') }}" required placeholder="E-mail">
            <input type="password" type="password" name="password" required placeholder="Пароль">
            @if ($errors->has('name'))
                <p id="error">{{ $errors->first('name') }}</p>
            @endif
            @if ($errors->has('email'))
                <p id="error">{{ $errors->first('email') }}</p>
            @endif
            @if ($errors->has('password'))
                <p id="error">{{ $errors->first('password') }}</p>
            @endif
            @if ($errors->has('password_confirmation'))
                <p id="error">{{ $errors->first('password_confirmation') }}</p>
            @endif
            <button type="submit">ВХОД</button>
            <p id="checkbox">
                <input name="remember" type="checkbox" id="c1">
                <label for="c1">Запомнить</label>
            </p>
            <a  href="{{ url('/password/reset') }}">Восстановить</a>
        </form>
    </div>
    <p class="bottom">Ещё нет аккаунта? <a href="register">Создать</a></p>
</section>
@endsection
