@extends('layouts.mini')

@section('title', 'Giriş Yap')

@section('form')
    <form action="{{ route('login.post') }}" method="post">
        @csrf

        <div class="{{ $errors->all() ? 'group alert' : 'group' }}">
            <input type="mail" name="email" class="dynPut" required>
            <label for="mail">E-Posta</label>
        </div>

        <div class="{{ $errors->all() ? 'group alert' : 'group' }}">
            <input type="password" name="password" class="dynPut" required>
            <label for="mail">Parola</label>
        </div>

        <div class="group">
            <button class="submit-btn">
                GİRİŞ YAP
            </button>
        </div>
    </form>
    <div class="footer">
        Hesabın yok mu? <a href="#">Erişim İste</a>
    </div>
@endsection
