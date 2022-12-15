@extends('layouts.app')

@section('title', 'Ürün İncelemeleri - Akıllıphone')

@section('content')

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
