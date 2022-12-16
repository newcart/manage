@extends('layouts.app')

@section('title', 'Slayt Yönetimi - Akıllıphone')

@section('content')
    <a href="#" class="btn btn-primary">
        Yeni Slayt Ekle
    </a>

    {{ $datatable['html'] }}
@endsection

@section('scripts')
    {{ $datatable['js'] }}
@endsection
