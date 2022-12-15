@extends('layouts.app')

@section('title', 'Ürün Birimleri - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.products.units.create') }}" class="btn btn-primary">
        Yeni Özellik Grubu Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
