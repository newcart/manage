@extends('layouts.app')

@section('title', 'Stok Uyarı İstekleri - Akıllıphone')

@section('content')
    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
