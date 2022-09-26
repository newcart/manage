@extends('layouts.app')

@section('title', $type->name .' | Kullanıcı Tipi Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $type->name }} kullanıcı tipini düzenliyorsunuz</h1>
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
        @foreach($services as $service)
            <div class="flex gap-2 mb-3">
                <p>{{ $service->name }}</p>
                <div>
                    <p>Görüntüle</p>
                    <label class="switch">
                        @if ($roles[$service->code]['view'])
                            <input type="checkbox" name="services[{{ $service->code }}][view]" checked>
                        @else
                            <input type="checkbox" name="services[{{ $service->code }}][view]">
                        @endif
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Oluştur</p>
                    <label class="switch">

                        @if ($roles[$service->code]['create'])
                            <input type="checkbox" name="services[{{ $service->code }}][create]" checked>
                        @else
                            <input type="checkbox" name="services[{{ $service->code }}][create]">
                        @endif
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Güncelle</p>
                    <label class="switch">
                        @if ($roles[$service->code]['update'])
                            <input type="checkbox" name="services[{{ $service->code }}][update]" checked>
                        @else
                            <input type="checkbox" name="services[{{ $service->code }}][update]">
                        @endif
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Sil</p>
                    <label class="switch">
                        @if ($roles[$service->code]['delete'])
                            <input type="checkbox" name="services[{{ $service->code }}][delete]" checked>
                        @else
                            <input type="checkbox" name="services[{{ $service->code }}][delete]">
                        @endif
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Kullanıcı Tipini Güncelle</button>
    </form>
@endsection
