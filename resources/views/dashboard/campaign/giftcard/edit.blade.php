@extends('layouts.app')

@section('title' , 'Yeni Hediye Kartı Ekle | Akıllıphone')

@section('content')
    <h1>Yeni Hediye Kartı Ekle</h1>
    <form action="{{ route('dashboard.campaign.giftcard.store') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Hediye Kartı Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="card_code" class="form-label">Kart Kodu</label>
                    <input type="text" class="form-control" name="card_code"  value="{{ $giftcard->code}}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Ürün</label>
                    @php
                        $status = [
                            '0' => 'Aktif',
                            '1' => 'Pasif',
        ];
                    @endphp
                    <select name="status">
                        @foreach($status as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alt_category" class="form-label">Alt Kategorilerde Aktif</label>
                    @php
                        $alt_cat = [
                            '0' => 'Aktif',
                            '1' => 'Pasif',
        ];
                    @endphp
                    <select name="alt_category">
                        @foreach($alt_cat as $value => $option)
                            @if()
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    @php
                        $category = [
                            '0' => 'Kategori 1',
                            '1' => 'Kategori 2',
        ];
                    @endphp
                    <select name="category">
                        @foreach($category as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marka</label>
                    @php
                        $brand = [
                            '0' => 'Marka 1',
                            '1' => 'Marka 2',
        ];
                    @endphp
                    <select name="brand">
                        @foreach($brand as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="discount_Type" class="form-label">İndirim Tipi</label>
                    @php
                        $discount_Type = [
                            '0' => 'Yüzde',
                            '1' => 'Tutar',
        ];
                    @endphp
                    <select name="discount_Type">
                        @foreach($discount_Type as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">İndirim Değeri</label>
                    <input type="text" class="form-control" name="discount" value="{{ $giftcard->discount}}">
                </div>
                <div class="mb-3">
                    <label for="max_usage" class="form-label">Maksimum Kullanım</label>
                    <input type="number" class="form-control" name="max_usage" value="{{ $giftcard->max_usage}}">
                </div>
                <div class="mb-3">
                    <label for="maxsingle__usage" class="form-label">Maksimum Tekli Kullanım</label>
                    <input type="number" class="form-control" name="max_single_usage"  value="{{ $giftcard->max_single_usage}}">
                </div>
                <div class="mb-3">
                    <label for="discount_Type" class="form-label">İndirim Tipi</label>
                    @php
                        $member_type = [
                            '0' => 'Genel',
                            '1' => 'Üye',
        ];
                    @endphp
                    <select name="discount_Type">
                        @foreach($member_type as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="member_fullname" class="form-label">Üye Ad Soyad</label>
                    <input type="text" class="form-control" name="member_fullname" value="{{ $giftcard->member_fullname}}" >
                </div>
                <div class="mb-3">
                    <label for="min_limit_amout" class="form-label">Minimum Limit Tutarı</label>
                    <input type="number" class="form-control" name="min_limit_amout"value="{{ $giftcard->min_limit_amout}}">
                </div>
                <div class="mb-3">
                    <label for="max_limit_amout" class="form-label">Maksimum Limit Tutarı</label>
                    <input type="number" class="form-control" name="max_limit_amout" value="{{ $giftcard->max_limit_amout}}">
                </div>
                <div class="mb-3">
                    <label for="slide_time" class="form-label">Kampanya Geçerlilik Zamanı</label>
                    <div class="date-picker-area">
                        <input type="text" class="date-picker" readonly placeholder="Tarih" value=" value="{{ $giftcard->available_time_start }}"">
                        <span>arasında</span>
                        <input type="text" id="date-picker2" placeholder="..." value="{{ $giftcard->available_time_ends }}">
                        <button class="filter">Filtrele</button>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" {!! $giftcard->status !!}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kampanyayı Kaydet</button>
    </form>
@endsection
