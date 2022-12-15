@extends('layouts.app')

@section('title', 'Özellik Setleri - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.products.specs.spec_sets.create') }}" class="btn btn-primary">
        Yeni Özellik Grubu Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
