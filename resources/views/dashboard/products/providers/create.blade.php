@extends('layouts.app')

@section('title', 'Yeni Tedarikçi Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Tedarikçi Ekle</h1>
    <form action="{{ route('dashboard.products.tax.store') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Tedarikçi Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Kod</label>
                    <input type="text" class="form-control" name="code">
                </div>
                <div class="mb-3">
                    <label for="seo_title" class="form-label">SEO Başlığı</label>
                    <textarea name="seo_title" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="seo_keywords" class="form-label">SEO Anahtar Kelimeleri</label>
                    <textarea name="seo_keywords" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="seo_description" class="form-label">SEO Açıklaması</label>
                    <textarea name="seo_description" class="form-control"></textarea>
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
        <button type="submit" class="btn btn-primary">Tedarikçi ekle</button>
    </form>
@endsection
