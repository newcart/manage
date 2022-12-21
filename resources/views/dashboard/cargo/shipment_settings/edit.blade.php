@extends('layouts.app')

@section('title', 'Gönderim Ayarları - Akıllıphone')

@section('content')
    <h1>Gönderim Ayarları</h1>
    <form action="{{ route('panel.cargo.shipment.update', $shipment) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Ürün Sayfasında Kargoya Verilme Uyarısı</label>
            @php
                $options = [
                    '0' => 'Evet',
                    '1' => 'Hayır'
                ];
            @endphp
            <select name="cargo_warning">
                @foreach($options as $value => $option)
                    <option value="{{ $value }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fixed_shipping_price" class="form-label">Sabit Kargo Ücreti</label>
            <input type="number" class="form-control" name="fixed_shipping_price" value="{{ $shipment->fixed_shipping_price }}">
        </div>
        <div class="mb-3">
            <label for="pat_at_the_door_lowest" class="form-label">Kapıda Ödeme (Düşük Sepet)</label>
            <input type="number" class="form-control" name="pat_at_the_door_lowest" value="{{ $shipment->pat_at_the_door_lowest }}">
        </div>
        <div class="mb-3">
            <label for="pat_at_the_door_highest" class="form-label">Kapıda Ödeme (Yüksek Sepet)</label>
            <input type="number" class="form-control" name="pat_at_the_door_highest" value="{{ $shipment->pat_at_the_door_highest }}">
        </div>
        <div class="mb-3">
            <label for="pat_at_the_door_discount" class="form-label">Kapıda Ödeme Kargo İndirim Barajı</label>
            <input type="number" class="form-control" name="pat_at_the_door_discount" value="{{ $shipment->pat_at_the_door_discount }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border" class="form-label">Ücretsiz Kargo Sınırı</label>
            <input type="number" class="form-control" name="free_shipping_border" value="{{ $shipment->free_shipping_border }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_monday" class="form-label">Ücretsiz Kargo Sınırı (Pazartesi)</label>
            <input type="number" class="form-control" name="free_shipping_border_monday" value="{{ $shipment->free_shipping_border_monday }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_tuesday" class="form-label">Ücretsiz Kargo Sınırı (Salı)</label>
            <input type="number" class="form-control" name="free_shipping_border_tuesday" value="{{ $shipment->free_shipping_border_tuesday }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_wednesday" class="form-label">Ücretsiz Kargo Sınırı (Çarşamba)</label>
            <input type="number" class="form-control" name="free_shipping_border_wednesday" value="{{ $shipment->free_shipping_border_wednesday }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_thursday" class="form-label">Ücretsiz Kargo Sınırı (Perşembe)</label>
            <input type="number" class="form-control" name="free_shipping_border_thursday" value="{{ $shipment->free_shipping_border_thursday }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_friday" class="form-label">Ücretsiz Kargo Sınırı (Cuma)</label>
            <input type="number" class="form-control" name="free_shipping_border_friday" value="{{ $shipment->free_shipping_border_friday }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_saturday" class="form-label">Ücretsiz Kargo Sınırı (Cumartesi)</label>
            <input type="number" class="form-control" name="free_shipping_border_saturday" value="{{ $shipment->free_shipping_border_saturday }}">
        </div>
        <div class="mb-3">
            <label for="free_shipping_border_sunday" class="form-label">Ücretsiz Kargo Sınırı (Pazar)</label>
            <input type="number" class="form-control" name="free_shipping_border_sunday" value="{{ $shipment->free_shipping_border_sunday }}">
        </div>
        <button type="submit" class="btn btn-primary">Ayarları kaydet</button>
    </form>
@endsection
