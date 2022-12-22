@extends('layouts.app')

@section('title', 'E-Posta Hesabı Ekle - Akıllıphone')

@section('content')
    <h1>E-Posta Hesabı Ekle</h1>
    <form action="{{ route('settings.email.create') }}" method="POST">
        @csrf
        <div>
            <div class="line">
                <div class="title">E-Posta Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="email" class="form-label">E-Posta Adresi</label>
                    <label>
                        <input type="email" class="form-control" name="email">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="sender" class="form-label">Gönderen</label>
                    <label>
                        <input type="text" class="form-control" name="sender">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="sender_description" class="form-label">Gönderen Açıklama</label>
                    <label>
                        <input type="text" class="form-control" name="sender_description">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="server_address" class="form-label">Sunucu Adresi</label>
                    <label>
                        <input type="text" class="form-control" name="server_address">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Kullanıcı Adı</label>
                    <label>
                        <input type="text" class="form-control" name="username">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Şifre</label>
                    <label>
                        <input type="password" class="form-control" name="password">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="security_type" class="form-label">Güvenlik Türü</label>
                    <label>
                        @php
                            $options = [
                              '0' => 'Normal',
                              '1' => 'SSL',
                              '2' => 'TLS'
                            ];
                        @endphp
                        <select name="security_type">
                            @foreach($options as $value => $option)
                                <option value="{{ $value }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">İzinler</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="contact_form" class="form-label">İletişim Formu</label>
                    <label>
                        <input type="checkbox" class="form-control" name="contact_form">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="order" class="form-label">Sipariş</label>
                    <label>
                        <input type="checkbox" class="form-control" name="order">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="cargo" class="form-label">Kargo</label>
                    <label>
                        <input type="checkbox" class="form-control" name="cargo">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="user_managment" class="form-label">Üyelik ve Şifre</label>
                    <label>
                        <input type="checkbox" class="form-control" name="user_managment">
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">E-Posta Hesabını Kaydet</button>
    </form>
@endsection

