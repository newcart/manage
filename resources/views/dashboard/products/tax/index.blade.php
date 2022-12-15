@extends('layouts.app')

@section('title', 'Vergi Yönetimi - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.products.tax.create') }}" class="btn btn-primary">
        Yeni Vergi Bilgisi Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
