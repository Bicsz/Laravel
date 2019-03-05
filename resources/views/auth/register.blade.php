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
        <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
            <input type="text" required placeholder="Логин" name="name" value="{{ old('name') }}">
            <input type="text" class="{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" value="{{ old('email') }}" required placeholder="E-mail">
            <input type="password" class="{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required placeholder="Пароль">
            <input type="password" class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" name="password_confirmation" required placeholder="Повтор пароля">
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
            
            <button type="submit">РЕГИСТРАЦИЯ</button>
            <p></p>
        </form>
    </div>
    <p class="bottom">Уже есть аккаунт? <a href="login">Войти</a></p>
</section>
@endsection
