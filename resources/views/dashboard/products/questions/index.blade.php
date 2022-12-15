@extends('layouts.app')

@section('title', 'Ürün Soruları - Akıllıphone')

@section('content')

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
