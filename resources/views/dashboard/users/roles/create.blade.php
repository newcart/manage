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
        @foreach($services as $service)
            <div class="flex gap-2 mb-3">
                <p>{{ $service->name }}</p>
                <div>
                    <p>Görüntüle</p>
                    <label class="switch">
                        <input type="checkbox" name="services[{{ $service->code }}][view]">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Oluştur</p>
                    <label class="switch">
                        <input type="checkbox" name="services[{{ $service->code }}][create]">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Güncelle</p>
                    <label class="switch">
                        <input type="checkbox" name="services[{{ $service->code }}][update]">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Sil</p>
                    <label class="switch">
                        <input type="checkbox" name="services[{{ $service->code }}][delete]">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Servis ekle</button>
    </form>
@endsection
