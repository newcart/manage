@extends('layouts.app')

@section('title', 'Banka Havale Yönetimi - Akıllıphone')

@section('content')
    <h1>Banka Tanımları</h1>
    <div class="button-group">
        <a href="#" class="btn-primary">
            Yeni Banka Ekle
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
