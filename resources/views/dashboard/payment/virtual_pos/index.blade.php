@extends('layouts.app')

@section('title', 'Sanal Pos Yönetimi - Akıllıphone')

@section('content')
    <h1>Sanal Poslar</h1>
    <div class="button-group">
        <a href="#" class="btn-primary">
            Yeni Banka Ekle
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
