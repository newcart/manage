@extends('layouts.app')

@section('title', 'Fiyat Uyarı İstekleri - Akıllıphone')

@section('content')
    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
