@extends('layouts.app')

@section('title' , $productCampaign->name . ' Kampanyasını Düzenle | Akıllıphone')

@section('content')
    <h1>{{ $productCampaign->name }} Kampanyasını Düzenle</h1>
    <form action="{{ route('dashboard.campaign.product_campaign.update', $productCampaign) }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Slayt Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="product" class="form-label">Ürün</label>
                    @php
                        $options = [
                            '0' => 'Anasayfa',
                            '1' => 'Kategori Sayfası',
                            '2' => 'Anasayfa Sol',
                            '3' => 'Anasayfa Sağ',
                            '4' => 'Anasayfa Üst',
                            '5' => 'Anasayfa Alt',
                            '6' => 'Bütün Sayfalar Üst',
                            '7' => 'Bütün Sayfalar Alt',
                            '8' => 'Bütün Sayfalar Sağ',
                            '9' => 'Bütün Sayfalar Sol',
                            '10' => 'Baseus Site',
                            '11' => 'Mobil Tema',
                            '12' => 'Mobil Tema - Mini'
        ];
                    @endphp
                    <select name="product">
                        @foreach($options as $value => $option)
                            @if($productCampaign->product == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Ürün Fiyatı</label>
                    <input type="number" class="form-control" name="price" value="{{ $productCampaign->price }}">
                </div>
                <div class="mb-3">
                    <label for="cart_limit" class="form-label">Sepet Limiti</label>
                    <input type="text" class="form-control" name="cart_limit" value="{{ $productCampaign->cart_limit }}">
                </div>
                <div class="mb-3">
                    <label for="slide_time" class="form-label">Kampanya Geçerlilik Zamanı</label>
                    <div class="date-picker-area">
                        <input type="text" class="date-picker" readonly placeholder="Tarih" value="{{ $productCampaign->available_time_starts }}">
                        <span>arasında</span>
                        <input type="text" id="date-picker2" placeholder="..." value="{{ $productCampaign->available_time_ends }}">
                        <button class="filter">Filtrele</button>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" {!! $productCampaign->status ? "checked" : "" !!}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kampanyayı Kaydet</button>
    </form>
@endsection
