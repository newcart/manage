@extends('layouts.app')

@section('title', 'Yeni Vergi Bilgisi Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Vergi Bilgisi Ekle</h1>
    <form action="{{ route('dashboard.products.tax.store') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Vergi Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="ercentage" class="form-label">Oranı</label>
                    <input type="text" class="form-control" name="ercentage">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Vergi bilgisi ekle</button>
    </form>
@endsection
