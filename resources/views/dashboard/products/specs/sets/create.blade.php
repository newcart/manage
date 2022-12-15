@extends('layouts.app')

@section('title', 'Yeni Özellik Seti Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Özellik Seti Ekle</h1>
    <form action="{{ route('dashboard.products.specs.spec_sets.store') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Set Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
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
        <button type="submit" class="btn btn-primary">Özellik setini ekle</button>
    </form>
@endsection
