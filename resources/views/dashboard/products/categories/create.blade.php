@extends('layouts.app')

@section('title', 'Yeni Kategori Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Kategori Ekle</h1>
    <form action="{{ route('dashboard.categories.create') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Kategori Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="code" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Listeleme Sırası</label>
                    <input type="number" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Kod</label>
                    <input type="text" class="form-control" name="code">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="queue_no">
                </div>
                <!-- TODO: Add top category selector -->
                <!-- TODO: Add Amazon category selector -->
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Google Kategorisi</label>
                    <input type="text" class="form-control" name="google_category">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Menü CSS Sınıfı</label>
                    <input type="text" class="form-control" name="menu_css_class">
                </div>
                <!-- TODO: Add product feature selector -->
                <!-- TODO: Add product set selector -->
                <!-- TODO: Add color selector -->
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Anasayfa Sekme Sırası</label>
                    <input type="number" class="form-control" name="tab_queue">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="mb-3">
                    <label>Açıklama</label>
                    <textarea id="editor"></textarea>
                </div>
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
                    <input type="text" class="form-control" name="page_title">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Anahtar Kelimeler</label>
                    <input type="text" class="form-control" name="keywords">
                </div>
                <div class="mb-3">
                    <label>SEO Açıklaması</label>
                    <textarea id="editor"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kategori ekle</button>
    </form>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
