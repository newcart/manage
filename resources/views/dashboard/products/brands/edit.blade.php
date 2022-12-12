@extends('layouts.app')

@section('title', $brand->name . ' Markasını Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $brand->name }} adlı markayı düzenliyorsunuz</h1>
    <form action="{{ route('dashboard.brands.update', $brand) }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Marka Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="code" class="form-label">Logo</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Kod</label>
                    <input type="text" class="form-control" name="code" value="{{ $brand->code }}">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no" value="{{ $brand->queue_no }}">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" {!! $brand->status ? "checked" : "" !!}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label>Açıklama</label>
                <textarea id="editor">{!! $brand->description !!}</textarea>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">SEO Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="code" class="form-label">Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="page_title" value="{{ $brand->seo['page_title'] }}">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Anahtar Kelimeler</label>
                    <input type="text" class="form-control" name="keywords" value="{{ $brand->seo['keywords'] }}">
                </div>
                <div class="mb-3">
                    <label>SEO Açıklaması</label>
                    <textarea id="editor">
                        {!! $brand->seo['description'] !!}
                    </textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Marka ekle</button>
    </form>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
