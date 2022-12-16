@extends('layouts.app')

@section('title', 'Ürün Kampanya Yönetimi - Akıllıphone')

@section('content')
    <a href="#" class="btn btn-primary">
        Yeni Ürün Kampanyası EKle
    </a>

    {{ $datatable['html'] }}
@endsection

@section('scripts')
    {{ $datatable['js'] }}
@endsection
