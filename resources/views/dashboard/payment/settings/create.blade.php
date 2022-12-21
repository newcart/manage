@extends('layouts.app')

@section('title', 'Ödeme Ayarı Ekle - Akıllıphone')

@section('content')
    <h1>Ödeme Ayarı Ekle</h1>
    <form action="{{ route('dashboard.payment.settings.store') }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">Ödeme Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra No</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label for="payment_name" class="form-label">Ödeme Adı</label>
                    <input type="text" class="form-control" name="payment_name">
                </div>
                <div class="mb-3">
                    <label for="minimum_amount" class="form-label">Minimum Tutar</label>
                    <input type="text" class="form-control" name="minimum_amount">
                </div>
                <div class="mb-3">
                    <label for="maximum_amount" class="form-label">Maksimum Tutar</label>
                    <input type="text" class="form-control" name="maximum_amount">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">
                        Durum
                        @php
                            $options = [
                                '0' => 'Aktif',
                                '1' => 'Pasif'
                            ];
                        @endphp
                        <select name="status">
                            @foreach($options as $value => $option)
                                <option value="{{ $value }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="pricing" class="form-label">
                        Ücretlendirme
                        @php
                            $pricing = [
                                '0' => 'Sabit Ücret',
                                '1' => 'Oran'
                            ];
                        @endphp
                        <select name="pricing">
                            @foreach($options as $value => $option)
                                <option value="{{ $value }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="purchase_price" class="form-label">Ödeme Ücreti</label>
                    <input type="text" class="form-control" name="purchase_price">
                </div>
                <div class="mb-3">
                    <label for="purchase_price_2" class="form-label">Ödeme Ücreti 2</label>
                    <input type="text" class="form-control" name="purchase_price_2">
                </div>
                <div class="mb-3">
                    <label for="purchase_price_2_limit" class="form-label">Ödeme Ücreti 2 Sınır</label>
                    <input type="text" class="form-control" name="purchase_price_2_limit">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ödeme ayarını kaydet</button>
    </form>
@endsection
