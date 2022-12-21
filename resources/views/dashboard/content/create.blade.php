@extends('layouts.app')

@section('title', 'Yeni Sayfa - Akıllıphone')

@section('content')
    <h1>Yeni Sayfa</h1>
    <form action="{{ route('panel.content.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="status" class="form-label">Durum</label>
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
        </div>
        <div class="mb-3">
            <label for="permalink" class="form-label">Permalink</label>
            <input type="text" class="form-control" name="permalink">
        </div>
        <div class="mb-3 col-3">
            <div class="col">
                <div>
                    <label for="show_in_upper_menu" class="form-label">Üst Menüde Göster</label>
                    <input type="checkbox" class="form-control" name="show_in_upper_menu">
                </div>
                <div>
                    <label for="show_in_lesser_menu" class="form-label">Alt Menüde Göster</label>
                    <input type="checkbox" class="form-control" name="show_in_lesser_menu">
                </div>
                <div>
                    <label for="show_in_content_menu" class="form-label">İçerik Menüsünde Göster</label>
                    <input type="checkbox" class="form-control" name="show_in_content_menu">
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="upper_menu_block" class="form-label">Üst Menü Blok</label>
                    <input type="number" class="form-control" name="upper_menu_block">
                </div>
                <div>
                    <label for="lesser_menu_block" class="form-label">Alt Menü Blok</label>
                    <input type="number" class="form-control" name="lesser_menu_block">
                </div>
                <div>
                    <label for="content_menu_block" class="form-label">İçerik Menü Blok</label>
                    <input type="number" class="form-control" name="content_menu_block">
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="upper_menu_queue_no" class="form-label">Sıra No</label>
                    <input type="number" class="form-control" name="upper_menu_queue_no">
                </div>
                <div>
                    <label for="lesser_menu_queue_no" class="form-label">Sıra No</label>
                    <input type="number" class="form-control" name="lesser_menu_queue_no">
                </div>
                <div>
                    <label for="content_menu_queue_no" class="form-label">Sıra No</label>
                    <input type="number" class="form-control" name="content_menu_queue_no">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sayfayı kaydet</button>
    </form>
@endsection
