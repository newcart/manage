@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
@endsection

@section('title', 'Ürünler - Akıllıphone')

@section('content')
    <div class="btn-list d-flex my-2">
        <a href="#">
            <!-- TODO: Nethesap Entegrasyon Endpoint Bağla -->
            <button class="btn1 me-2">
                Nethesap'tan Yeni Ürünleri Çek
            </button>
        </a>
        <a href="{{ route('panel.products.new') }}">
            <button class="btn2 me-2">
                Yeni Ürün Ekle
            </button>
        </a>
        <a href="#">
            <!-- TODO: Nethesap Entegrasyon Endpoint Bağla -->
            <button class="btn1 me-2">
                Nethesap'tan Stok Güncelle
            </button>
        </a>
        <button class="btn3 me-2">QR Kod</button>
    </div>

    @include('dashboard.products.components.productType')

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/plugins/rangePlugin.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/tr.js"></script>
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-select.js') }}"></script>
    {!! $datatable['js'] !!}
@endsection
