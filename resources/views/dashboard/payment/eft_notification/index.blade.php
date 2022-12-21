@extends('layouts.app')

@section('title', 'Havale Bildirimleri - Akıllıphone')

@section('content')
    <h1>Havale Bildirimleri</h1>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
