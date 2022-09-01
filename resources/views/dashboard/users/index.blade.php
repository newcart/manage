@extends('layouts.app')

@section('title', 'Kullanıcıalar - Akıllıphone')

@section('content')
    <a href="{{ route('panel.users.new') }}" class="btn btn-primary">
        Yeni Kullanıcı Ekle
    </a>
    <a href="{{ route('panel.users.services') }}" class="btn btn-warning">
        Servisler
    </a>
    <a href="{{ route('panel.users.types') }}" class="btn btn-success">
        Yetkiler
    </a>
    <a href="{{ route('panel.users.roles') }}" class="btn btn-danger">
        Roller
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
