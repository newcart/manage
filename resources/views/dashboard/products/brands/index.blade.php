@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
@endsection

@section('title', 'Marka Yönetimi - Akıllıphone')

@section('content')
    <div class="btn-list d-flex my-2">
        <a href="{{ route('dashboard.brands.create') }}" class="btn btn-success">
            Yeni Marka Ekle
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
