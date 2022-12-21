@extends('layouts.app')

@section('title', 'Bayi Listesi - Akıllıphone')

@section('content')
    <h1>Bayi Listesi</h1>
    <div class="button-group">
        <a href="#" class="btn btn-primary">
            Yeni Bayi Ekle
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
