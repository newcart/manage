@extends('layouts.app')

@section('title', 'Servisler - Akıllıphone')

@section('content')
    <a href="{{ route('dashboard.users.services.new') }}" class="btn btn-warning">
        Servis Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
