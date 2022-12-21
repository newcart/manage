@extends('layouts.app')

@section('title', 'İçerik Sayfaları - Akıllıphone')

@section('content')
    <h1>İçerik Sayfalar</h1>
    <div class="button-group">
        <a href="#" class="btn btn-primary">
            Yeni Sayfa Ekle
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
