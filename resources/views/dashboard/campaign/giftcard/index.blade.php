@extends('layouts.app')

@section('title', 'Hediye Kartı Yönetimi - Akıllıphone')

@section('content')
    <a href="#" class="btn btn-primary">
        Yeni Hediye Kartı EKle
    </a>

    {{ $datatable['html'] }}
@endsection

@section('scripts')
    {{ $datatable['js'] }}
@endsection
