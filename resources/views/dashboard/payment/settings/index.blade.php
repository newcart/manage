@extends('layouts.app')

@section('title', 'Ödeme Ayarları - Akıllıphone')

@section('content')
    <h1>Ödeme Ayarları</h1>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
