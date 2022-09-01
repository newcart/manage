@extends('layouts.app')

@section('title', 'Rol Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Rol Ekle</h1>
    <form action="{{ route('panel.users.roles.create') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Rol kodu</label>
            <input type="text" class="form-control" placeholder="example" name="code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Rol adı</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <p>Rol durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Servis ekle</button>
    </form>
@endsection
