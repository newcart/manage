@extends('layouts.app')

@section('title', 'Üreticiler - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.products.providers.create') }}" class="btn btn-primary">
        Yeni Üretici Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
