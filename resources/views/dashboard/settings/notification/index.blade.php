@extends('layouts.app')

@section('title', 'Bildirim Gönderme Ayarları - Akıllıphone')

@section('content')
    <h1>Bildirim Gönderme Ayarları</h1>
    <form action="{{ route('settings.notification.update', $notification) }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">Bildirim Gönderme Ayarları</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="push_notification_message" class="form-label">Bildirim Mesajı</label>
                    <textarea name="meta_tag_site_auth">{!! $notification->message !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="psuh_notification_message_2" class="form-label">Bildirim Mesaji - 2</label>
                    <textarea name="meta_tag_site_auth">{!! $notification->message_2 !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="callback_url" class="form-label">Geri Dönüş URL'si</label>
                    <input type="text" name="callback_url" value="{{ $notification->callback_url }}">
                </div>
                <div class="mb-3">
                    <label for="image_size" class="form-label">Resim Boyutu</label>
                    <input type="number" name="image_size_x" value="{{ $notification->image_size_x }}">
                    <input type="number" name="image_size_y" value="{{ $notification->image_size_y }}">
                </div>
                <div class="mb-3">
                    <label for="pulled_product_limit" class="form-label">Çekilecek Ürün Limit</label>
                    <input type="number" name="pulled_product_limit" value="{{ $notification->pulled_product_limit }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Bildirim Gönderimi Kaydet</button>
    </form>
@endsection
