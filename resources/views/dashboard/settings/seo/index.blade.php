@extends('layouts.app')

@section('title', 'SEO Ayarları - Akıllıphone')

@section('content')
    <h1>SEO Ayarları</h1>
    <form action="{{ route('settings.seo.store') }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">Ziyaretçi Takip Ayarları</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="google_order_track_code" class="form-label">Google Sipariş Takip Kodu</label>
                    <input type="number" class="form-control" name="google_order_track_code">
                </div>
                <div class="mb-3">
                    <label for="google_membership_track_code" class="form-label">Google Üyelik Takip Kodu</label>
                    <input type="number" class="form-control" name="google_membership_track_code">
                </div>
                <div class="mb-3">
                    <label for="meta_tag_site_auth" class="form-label">Meta Tag İle Site Doğrulama</label>
                    <textarea name="meta_tag_site_auth"></textarea>
                </div>
                <div class="mb-3">
                    <label for="google_analytics_code" class="form-label">Google Analytics Kodu</label>
                    <textarea name="google_analytics_code"></textarea>
                </div>
                <div class="mb-3">
                    <label for="google_analytics_ssl_code" class="form-label">Google Analytics SSL Kodu</label>
                    <textarea name="google_analytics_ssl_code"></textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">SEO Ayarlarını Kaydet</button>
    </form>
@endsection
