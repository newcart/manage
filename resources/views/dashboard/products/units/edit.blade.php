@extends('layouts.app')

@section('title', $unit->name . ' Birimini Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $unit->name }} adlı birimi düzenle</h1>
    <form action="{{ route('dashboard.products.units.update', $unit) }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Birim Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name" value="{{ $unit->name }}">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" {!! $unit->status == "1" ? "checked" : "" !!}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Birim kaydet</button>
    </form>
@endsection
