@extends('layouts.app')

@section('title', 'Renk Setleri - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.colors.new') }}" class="btn btn-primary">
        Yeni Renk Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
