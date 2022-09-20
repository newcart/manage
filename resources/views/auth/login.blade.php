@extends('layouts.mini')

@section('title', 'Giriş Yap')

@section('form')
    <form action="{{ route('login.post') }}" method="post">
        @csrf

        @if ($errors->all())
        <div class="group alert">
            <input type="mail" name="email" class="dynPut" required>
            <label for="mail">E-Posta</label>
        </div>
        @else
        <div class="group">
            <input type="mail" name="email" class="dynPut" required>
            <label for="mail">E-Posta</label>
        </div>
        @endif

        @if ($errors->all())
        <div class="group alert">
            <input type="password" name="password" class="dynPut" required>
            <label for="password">Parola</label>
        </div>
        @else
        <div class="group">
            <input type="password" name="password" class="dynPut" required>
            <label for="password">Parola</label>
        </div>
        @endif

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
