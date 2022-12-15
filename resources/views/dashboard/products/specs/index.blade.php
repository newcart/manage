@extends('layouts.app')

@section('title', 'Özellik Yönetimi - Akıllıphone')

@section('content')
    <div class="d-flex flex-row gap-3">
        <div class="col-6">
            <div class="line">
                <div class="title">Özellik Grupları</div>
                <hr class="line-styled">
            </div>
            <a href="{{ route('dashboard.products.specs.spec_groups.create') }}">
                <button class="btn2 me-2">
                    Yeni Özellik Grubu Ekle
                </button>
            </a>
            {!! $specGroup['html'] !!}
        </div>
        <div class="col-6">
            <div class="line">
                <div class="title">Özellik Setleri</div>
                <hr class="line-styled">
            </div>
            <a href="{{ route('dashboard.products.specs.spec_sets.create') }}">
                <button class="btn2 me-2">
                    Yeni Özellik Seti Ekle
                </button>
            </a>
            {!! $specSet['html'] !!}
        </div>
    </div>
@endsection

@section('scripts')
    {!! $specGroup['js'] !!}
    {!! $specSet['js'] !!}
@endsection
