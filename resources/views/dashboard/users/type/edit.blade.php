@extends('layouts.app')

@section('title', $type->name .' | Kullanıcı Tipi Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $type->code }} kodlu kullanıcı tipini düzenliyorsunuz</h1>
    <form action="{{ route('panel.users.types.update', $type) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$type->type_id}}">
        <div class="mb-3">
            <label for="code" class="form-label">Ürün kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code" value="{{ $type->code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ürün Adı</label>
            <input type="text" class="form-control" name="name" value="{{ $type->name }}">
        </div>
        <div class="mb-3">
            <p>Ürün Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="{{ $type->status }}">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Kullanıcı Tipini Güncelle</button>
    </form>
@endsection
