@extends('layouts.app')

@section('title', 'Kargo Firmaları')

@section('content')
    <h1>Kargo Firmaları</h1>

    <div class="button-group">
        <a href="#" class="btn-primary">
            Kargo Firması Ekle
        </a>
    </div>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection
