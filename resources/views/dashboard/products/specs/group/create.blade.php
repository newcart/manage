@extends('layouts.app')

@section('title', 'Yeni Özellik Grubu Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Özellik Grubu Ekle</h1>
    <form action="{{ route('dashboard.spec.group.create') }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Grup Bilgileri</div>
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
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Özellik grubunu ekle</button>
    </form>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
