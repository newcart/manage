@extends('layouts.app')

@section('title' , 'Yeni Slayt Ekle | Akıllıphone')

@section('content')
    <h1>Yeni Slayt Ekle</h1>
    <form action="{{ route('dashboard.campaign.slide.create') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Slayt Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="slide_type" class="form-label">Slayt Tipi</label>
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
                    <select name="slide_type">
                        @foreach($options as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label for="slide_description" class="form-label">Açıklama</label>
                    <input type="text" class="form-control" name="slide_description">
                </div>
                <div class="mb-3">
                    <label for="slide_time" class="form-label">Slayt Geçerlilik Zamanı</label>
                    <div class="date-picker-area">
                        <input type="text" class="date-picker" readonly placeholder="Tarih">
                        <span>arasında</span>
                        <input type="text" id="date-picker2" placeholder="..." >
                        <button class="filter">Filtrele</button>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Slayt Resimleri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3" id="slide_image_form">
                <div class="mb-3">
                    <label for="slide_image_1" class="form-label">Slayt Resmi 1</label>
                    <input type="image" class="form-control" name="slide_image_1">
                </div>
                <div class="mb-3">
                    <label for="slide_image_2" class="form-label">Slayt Resmi 2</label>
                    <input type="image" class="form-control" name="slide_image_2">
                </div>
                <div class="mb-3">
                    <label for="slide_image_3" class="form-label">Slayt Resmi 3</label>
                    <input type="image" class="form-control" name="slide_image_3">
                </div>
                <div class="mb-3">
                    <label for="slide_image_4" class="form-label">Slayt Resmi 4</label>
                    <input type="image" class="form-control" name="slide_image_4">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Slaytı ekle</button>
    </form>
@endsection
