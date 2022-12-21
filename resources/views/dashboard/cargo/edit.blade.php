@extends('layouts.app')

@section('title', $cargo->title . ' Firmasını Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $cargo->title }} firmasını düzenle</h1>
    <form action="{{ route('panel.cargo.update', $cargo) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Firma Kod kodu</label>
            <input type="text" class="form-control" placeholder="cargo-model" name="code" value="{{ $cargo->code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Firma Adı</label>
            <input type="text" class="form-control" name="name" value="{{ $cargo->name }}">
        </div>
        <div class="mb-3">
            <label for="fixed_shipping_price" class="form-label">Sabit Kargo Ücreti</label>
            <input type="number" class="form-control" name="fixed_shipping_price" value="{{ $cargo->fixed_shipping_price }}">
        </div>
        <div class="mb-3">
            <label for="pay_at_the_door_lowest" class="form-label">Kapıda Ödeme (Düşük Sepet)</label>
            <input type="number" class="form-control" name="pay_at_the_door_lowest" value="{{ $cargo->pay_at_the_door_lowest }}">
        </div>
        <div class="mb-3">
            <label for="pay_at_the_door_highest" class="form-label">Kapıda Ödeme (Yüksek Sepet)</label>
            <input type="text" class="form-control" name="pay_at_the_door_highest" value="{{ $cargo->pay_at_the_door_highest }}">
        </div>
        <div class="mb-3">
            <p>Firma Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="{{ $cargo->status }}">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Firmayı kaydet</button>
    </form>
@endsection
