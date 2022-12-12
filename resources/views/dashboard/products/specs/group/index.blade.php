@extends('layouts.app')

@section('title', 'Kullanıcılar - Akıllıphone')

@section('content')
    <a href="{{ route('panel.specs.group.new') }}" class="btn btn-primary">
        Yeni Özellik Grubu Ekle
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
