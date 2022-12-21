@extends('layouts.app')

@section('title', 'SMS Yönetimi - Akıllıphone')

@section('content')
    <h1>SMS Gönderim Ayarları</h1>
    <form action="{{ route('dashboard.settings.sms.update', $sms) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <div class="line">
                <div class="title">SMS Ayarları</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Kullanıcı Adı</label>
                    <input type="text" name="username">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Kullanıcı Kodu</label>
                    <input type="text" name="code">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Şifre</label>
                    <input type="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="cargo_status_notification" class="form-label">Sipariş Kargo Durumu SMS Bildirimi</label>
                    <input type="checkbox" name="cargo_status_notification">
                </div>
                <div class="mb-3">
                    <label for="cargo_status_notification_message" class="form-label">SMS Mesajı</label>
                    <textarea name="cargo_status_notification_message"></textarea>
                </div>
                <div class="mb-3">
                    <label for="accept_status_notification" class="form-label">Sipariş Onay Durumu SMS Bildirimi</label>
                    <input type="checkbox" name="accept_status_notification">
                </div>
                <div class="mb-3">
                    <label for="accept_status_notification_message" class="form-label">SMS Mesajı</label>
                    <textarea name="accept_status_notification_message"></textarea>
                </div>
                <div class="mb-3">
                    <label for="cancel_status_notification" class="form-label">Sipariş İptal Durumu SMS Bildirimi</label>
                    <input type="checkbox" name="cancel_status_notification">
                </div>
                <div class="mb-3">
                    <label for="accept_status_notification_message" class="form-label">SMS Mesajı</label>
                    <textarea name="cancel_status_notification_message"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">SMS Ayarlarını Kaydet</button>
    </form>
@endsection
