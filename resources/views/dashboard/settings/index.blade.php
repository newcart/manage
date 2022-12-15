@extends('layouts.app')

@section('title', 'Genel Site Ayarları - Akıllıphone')

@section('content')
    <h1>Yeni Ürün ekle</h1>
    <form action="{{ route('settings.store') }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">Genel Ayarlar</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="company_name" class="form-label">Firma Adı</label>
                    <input type="text" class="form-control" name="company_name">
                </div>
                <div class="mb-3">
                    <label for="company_official_name" class="form-label">Firma Resmi Adı</label>
                    <input type="text" class="form-control" name="company_official_name">
                </div>
                <div class="mb-3">
                    <label for="website_address" class="form-label">Site Adresi</label>
                    <input type="text" class="form-control" name="website_address">
                </div>
                <div class="mb-3">
                    <label for="person_in_charge" class="form-label">Yetkili Kişi</label>
                    <input type="text" class="form-control" name="person_in_charge">
                </div>
                <div class="mb-3">
                    <label for="phone-1" class="form-label">Telefon - 1</label>
                    <input type="text" class="form-control" name="phone-1">
                </div>
                <div class="mb-3">
                    <label for="phone-2" class="form-label">Telefon - 2</label>
                    <input type="text" class="form-control" name="phone-2">
                </div>
                <div class="mb-3">
                    <label for="faks" class="form-label">Faks</label>
                    <input type="text" class="form-control" name="faks">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-Posta</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Adres</label>
                    <textarea name="address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tax_office" class="form-label">Vergi Dairesi</label>
                    <input type="text" class="form-control" name="tax_office">
                </div>
                <div class="mb-3">
                    <label for="tax_no" class="form-label">Vergi No.</label>
                    <input type="text" class="form-control" name="tax_no">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ayarları Kaydet</button>
    </form>
@endsection
