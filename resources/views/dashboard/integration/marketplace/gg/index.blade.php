@extends('layouts.app')

@section('title', 'GittiGidiyor Entegrasyonu - Akıllıphone')

@section('content')
    <h1>GittiGidiyor Entegrasyonu</h1>

    <form method="POST" action="#">
        <div>
            <div class="line">
                <div class="title">GittiGidiyor Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Mağaza Seçin

                    @php
                        $options = [
                            '0' => 'Akıllıphone',
                            '1' => 'Ezere'
                        ];
                    @endphp
                    <select name="store">
                        @foreach($options as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Başlangıç Stok Kodu
                    <input type="number" class="form-control" name="start_stock_kod">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Bitiş Stok Kodu
                    <input type="number" class="form-control" name="end_stock_kod">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Fiyat Çarpanı
                    <input type="text" class="form-control" name="price_multiplier">
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Kaydet</button>
    </form>
@endsection
