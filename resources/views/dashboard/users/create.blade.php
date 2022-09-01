@extends('layouts.app')

@section('title', 'Kullanıcı Tipi Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Kullanıcı Ekle</h1>
    <form action="{{ route('panel.users.create') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Kullanıcı tipi kodu</label>
            <input type="text" class="form-control" placeholder="example" name="code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Kullanıcı tipi adı</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <p>Kullanıcı tipi durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Kullanıcı tipi ekle</button>
    </form>
@endsection
