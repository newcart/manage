@extends('layouts.app')

@section('title', 'Özellik Yönetimi - Akıllıphone')

@section('content')
    <div class="btn-list d-flex my-2">
        <a href="{{ route('dashboard.specs.spec_groups.create') }}">
            <button class="btn2 me-2">
                Yeni Özellik Grubu Ekle
            </button>
        </a>
        <a href="{{ route('dashboard.specs.spec_sets.create') }}">
            <button class="btn2 me-2">
                Yeni Özellik Seti Ekle
            </button>
        </a>
    </div>

    <div class="d-flex flex-row gap-3">
        <div>
            <div class="line">
                <div class="title">Özellik Grupları</div>
                <hr class="line-styled">
            </div>
            {!! $specGroup['html'] !!}
        </div>
        <div>
            <div class="line">
                <div class="title">Özellik Setleri</div>
                <hr class="line-styled">
            </div>
            {!! $specSet['html'] !!}
        </div>
    </div>
@endsection

@section('scripts')
    {!! $specGroup['js'] !!}
    {!! $specSet['js'] !!}
@endsection
