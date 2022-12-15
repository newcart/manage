@extends('layouts.app')

@section('title', 'Yeni Renk Bilgisi Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Renk Bilgisi Ekle</h1>
    <form action="{{ route('dashboard.products.colors.store') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Renk Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label for="color_code" class="form-label">Renk Kodu</label>
                    <input type="color" class="form-control" name="color_code">
                </div>
                @php
                    $options = [
                        'Renk Grubu',
                        'Renksiz',
                        'Sarı',
                        'Mavi'
];
                @endphp
                <select name="color_group">
                    @foreach($options as $value => $option)
                        <option value="{{ $value }}">{{ $option }}</option>
                    @endforeach
                </select>
                @php
                    $gg = [
                        'GG Renk Karşılığı',
                        'Renksiz',
                        'Sarı',
                        'Mavi'
];
                @endphp
                <select name="color_group">
                    @foreach($gg as $value => $option)
                        <option value="{{ $value }}">{{ $option }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Renk bilgisi ekle</button>
    </form>
@endsection
