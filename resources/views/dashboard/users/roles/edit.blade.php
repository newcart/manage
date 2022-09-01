@extends('layouts.app')

@section('title', $role->role_id .' | Rol Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $role->role_id }} kodlu rolü düzenliyorsunuz</h1>
    <form action="{{ route('panel.users.roles.update', $role) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$role->type_id}}">
        <div class="mb-3">
            <label for="code" class="form-label">Rol kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code" value="{{ $role->code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Rol Adı</label>
            <input type="text" class="form-control" name="name" value="{{ $role->name }}">
        </div>
        <div class="mb-3">
            <p>Rol Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="{{ $role->status }}">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Servisi Güncelle</button>
    </form>
@endsection
