@extends('layouts.app')

@section('title', 'Ürünler - Akıllıphone')

@section('content')
<a href="{{ route('panel.products.new') }}" class="btn btn-primary">
Yeni Ürün Ekle
</a>

{!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
