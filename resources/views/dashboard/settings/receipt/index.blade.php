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
        <div>
            <div class="line">
                <div class="title">Anasayfa</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="homepage_title" class="form-label">Anasayfa Başlığı</label>
                    <input type="text" class="form-control" name="home_title">
                </div>
                <div class="mb-3">
                    <label for="homepage_keywords" class="form-label">Anasayfa Anahtar Kelimeleri</label>
                    <textarea name="homepage_keywords"></textarea>
                </div>
                <div class="mb-3">
                    <label for="homepage_description" class="form-label">Anasayfa Açıklaması</label>
                    <textarea name="homepage_description"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Kategori Sayfası</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <div class="button-group">
                        <a href="#" class="btn-primary">
                            Kategori Adı
                        </a>
                        <a href="#" class="btn-primary">
                            Kategori Başlık
                        </a>
                    </div>
                    <label for="category_page_title" class="form-label">Kategori Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="category_page_title">
                </div>
                <div class="mb-3">
                    <label for="category_page_keywords" class="form-label">Kategori Sayfası Anahtar Kelimeleri</label>
                    <textarea name="category_page_keywords"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category_page_description" class="form-label">Kategori Sayfa Açıklaması</label>
                    <textarea name="category_page_description"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Kategori Sayfası</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <div class="button-group">
                        <a href="#" class="btn-primary">
                            Kategori Adı
                        </a>
                        <a href="#" class="btn-primary">
                            Kategori Başlık
                        </a>
                    </div>
                    <label for="category_page_title" class="form-label">Kategori Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="category_page_title">
                </div>
                <div class="mb-3">
                    <label for="category_page_keywords" class="form-label">Kategori Sayfası Anahtar Kelimeleri</label>
                    <textarea name="category_page_keywords"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category_page_description" class="form-label">Kategori Sayfa Açıklaması</label>
                    <textarea name="category_page_description"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Marka Sayfası</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <div class="button-group">
                        <a href="#" class="btn-primary">
                            Marka Adı
                        </a>
                        <a href="#" class="btn-primary">
                            Marka Başlık
                        </a>
                    </div>
                    <label for="brand_page_title" class="form-label">Marka Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="brand_page_title">
                </div>
                <div class="mb-3">
                    <label for="brand_page_keywords" class="form-label">Marka Sayfası Anahtar Kelimeleri</label>
                    <textarea name="brand_page_keywords"></textarea>
                </div>
                <div class="mb-3">
                    <label for="brand_page_description" class="form-label">Marka Sayfa Açıklaması</label>
                    <textarea name="brand_page_description"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Marka Sayfası</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <div class="button-group">
                        <a href="#" class="btn-primary">
                            Ürün Adı
                        </a>
                        <a href="#" class="btn-primary">
                            Ürün Satış Fiyatı
                        </a>
                        <a href="#" class="btn-primary">
                            Ürün Piyasa Fiyatı
                        </a>
                        <a href="#" class="btn-primary">
                            Kategori Adı
                        </a>
                        <a href="#" class="btn-primary">
                            Marka Adı
                        </a>
                    </div>
                    <label for="product_page_title" class="form-label">Ürün Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="product_page_title">
                </div>
                <div class="mb-3">
                    <label for="product_page_keywords" class="form-label">Ürün Sayfası Anahtar Kelimeleri</label>
                    <textarea name="product_page_keywords"></textarea>
                </div>
                <div class="mb-3">
                    <label for="product_page_description" class="form-label">Ürün Sayfa Açıklaması</label>
                    <textarea name="product_page_description"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Diğer Sayfalar</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="page_title" class="form-label">Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="page_title">
                </div>
                <div class="mb-3">
                    <label for="page_keywords" class="form-label">Sayfa Anahtar Kelimeleri</label>
                    <textarea name="page_keywords"></textarea>
                </div>
                <div class="mb-3">
                    <label for="page_description" class="form-label">Sayfa Açıklaması</label>
                    <textarea name="page_description"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">SEO Ayarlarını Kaydet</button>
    </form>
@endsection
