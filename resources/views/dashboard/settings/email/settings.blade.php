@extends('layouts.app')

@section('title', 'E-Posta Ayarları - Akıllıphone')

@section('content')
    <h1>E-Posta Ayarları</h1>
    <form action="{{ route('settings.email.update', $settings) }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">Sipariş Sonrası</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="after_order" class="form-label">Sipariş Sonrası Gönderilecek E-Posta Formatı</label>
                    <label>
                        <textarea class="form-control" name="after_order"></textarea>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="after_user_creation" class="form-label">Üyelik Sonrası Gönderilecek E-Posta Formtı</label>
                    <label>
                        <textarea class="form-control" name="after_user_creation"></textarea>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">E-Posta Ayarlarını Kaydet</button>
    </form>
@endsection

