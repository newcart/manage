@extends('layouts.app')

@section('title', $spec_group->name . ' Özellik Grubunu Düzenle - Akıllıphone')

@section('content')
    <h1>{{ $spec_group->name }} adlı özellik grubunu düzenliyorsunuz</h1>
    <form action="{{ route('dashboard.spec.group.update', $spec_group) }}" method="POST" class="mt-3">
        @csrf
        <div>
            <div class="line">
                <div class="title">Grup Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name" value="{{ $spec_group->name }}">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no" value="{{ $spec_group->queue_no }}">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" {!! $spec_group->status ? "checked" : "" !!}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Özellik grubunu kaydet</button>
    </form>
@endsection
