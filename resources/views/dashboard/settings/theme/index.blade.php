@extends('layouts.app')

@section('title', 'Genel Site Ayarları - Akıllıphone')

@section('content')
    <h1>Yeni Ürün ekle</h1>
    <form action="{{ route('settings.theme.store') }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">Tema Ayarları</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="home_slide_height" class="form-label">Anasayfa Slayt Yüksekliği</label>
                    <input type="number" class="form-control" name="home_slide_height">
                </div>
                <div class="mb-3">
                    <label for="category_slide_height" class="form-label">Kategori Slayt Yüksekliği</label>
                    <input type="number" class="form-control" name="category_slide_height">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="image" class="form-control" name="logo">
                </div>
                <div class="mb-3">
                    <label for="top_bar_content" class="form-label">Top Bar İçeriği</label>
                    <textarea name="top_bar_content"></textarea>
                </div>
                <div class="mb-3">
                    <label for="popup_content" class="form-label">Pop-up içeriği</label>
                    <textarea name="popup_content"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tema ayarlarını kaydet</button>
    </form>
@endsection
