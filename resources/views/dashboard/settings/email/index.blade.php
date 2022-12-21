@extends('layouts.app')

@section('title', 'E-Posta Yönetimi')

@section('content')
    <h1>E-Posta Yönetimi</h1>
    <div class="button-group">
        <a href="#" class="btn-primary">
            Yeni E-Posta Hesabı Ekle
        </a>
        <a href="#" class="btn-success">
            E-Posta Ayarları
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
