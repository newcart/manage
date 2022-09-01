@extends('layouts.app')

@section('title', $user->username . ' | Kullanıcı Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $user->username }} adlı kullanıcıyı düzenliyorsunuz</h1>
    <form action="{{ route('panel.users.update', $user) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$user->type_id}}">
        <div class="mb-3">
            <label for="code" class="form-label">Ürün kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code" value="{{ $user->code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ürün Adı</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <p>Ürün Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="{{ $user->status }}">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Kullanıcı Tipini Güncelle</button>
    </form>
@endsection
