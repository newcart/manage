@extends('layouts.app')

@section('title', $service->name . ' | Servis Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $service->code }} kodlu servisi düzenliyorsunuz</h1>
    <form action="{{ route('panel.users.service.update', $service) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$service->type_id}}">
        <div class="mb-3">
            <label for="code" class="form-label">Servis kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code" value="{{ $service->code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Servis Adı</label>
            <input type="text" class="form-control" name="name" value="{{ $service->name }}">
        </div>
        <div class="mb-3">
            <p>Servis Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="{{ $service->status }}">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Servisi Güncelle</button>
    </form>
@endsection
