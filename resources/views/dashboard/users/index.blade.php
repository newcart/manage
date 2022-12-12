@extends('layouts.app')

@section('title', 'Kullanıcılar - Akıllıphone')

@section('content')
    <a href="{{ route('panel.users.new') }}" class="btn btn-primary">
        Yeni Kullanıcı Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
