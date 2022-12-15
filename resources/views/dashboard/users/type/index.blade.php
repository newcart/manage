@extends('layouts.app')

@section('title', 'Yetkiler - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.users.types.create') }}" class="btn btn-warning">
        Yekti Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
