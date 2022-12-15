@extends('layouts.app')

@section('title', $tax->name . ' Vergisini Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $tax->name }} Bilgisini Düzenle</h1>
    <form action="{{ route('dashboard.products.tax.update', $tax) }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Vergi Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name" value="{{ $tax->name }}">
                </div>
                <div class="mb-3">
                    <label for="percentage" class="form-label">Oranı</label>
                    <input type="text" class="form-control" name="percentage" value="{{ $tax->percentage }}">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no" value="{{ $tax->queue_no }}">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" {!! $tax->status == 1 ? "checked" : "" !!}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Vergi bilgisi kaydet</button>
    </form>
@endsection
