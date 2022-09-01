@extends('layouts.mini')

@section('title', 'Giriş yap')

@section('form')
    <form method="POST" action="{{ route('register.post') }}">
        @csrf

        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif

        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="text" name="name" required>
            <label>Kullanıcı Adı</label>
        </div>

        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="mail" name="email" required>
            <label>Email</label>
        </div>

        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="password" name="password" required>
            <label>Parola</label>
            <a class="forgot-pass" href="#">Şifremi unuttum</a>
        </div>

        <div class="group">
            <button class="submit-btn">KAYIT OL</button>
        </div>

    </form>
    <div class="footer">
        Hesabın var mı? <a href="#">Giriş yap</a>
    </div>
@endsection
