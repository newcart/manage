@extends('layouts.app')

@section('title', 'Banka Ekle - Akıllıphone')

@section('content')
    <h1>Banka Ekle</h1>
    <form action="{{ route('dashboard.payment.eft.store') }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <div class="line">
                <div class="title">Banka Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="bank_name" class="form-label">Banka Adı</label>
                    <input type="number" class="form-control" name="bank_name">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Şifre</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Durum</label>
                    @php
                        $options = [
                            '0' => 'Pasif',
                            '1' => 'Aktif'
                        ];
                    @endphp
                    <select name="status">
                        @foreach($options as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="main_pos" class="form-label">Ana POS</label>
                    <select name="main_pos">
                        @foreach($options as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="three_d_secure" class="form-label">3D Secure</label>
                    <select name="three_d_secure">
                        @foreach($options as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="terminal_no" class="form-label">Terminal No.</label>
                    <input type="text" class="form-control" name="terminal_no">
                </div>
                <div class="mb-3">
                    <label for="min_hire_purchase_amount" class="form-label">Minimum Taksit Tutarı</label>
                    <input type="text" class="form-control" name="min_hire_purchase_amount">
                </div>
                <div class="mb-3">
                    <label for="otorization_type" class="form-label">Durum</label>
                    @php
                        $otorization = [
                            '0' => 'Ön Otorizasyon',
                            '1' => 'Normal Otorizasyon'
                        ];
                    @endphp
                    <select name="otorization_type">
                        @foreach($otorization as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="purchase_amount" class="form-label">Ödeme Ücreti</label>
                    <input type="text" class="form-control" name="purchase_amount">
                </div>
                <div class="mb-3">
                    <label for="purchase_amount_2" class="form-label">Ödeme Ücreti 2</label>
                    <input type="text" class="form-control" name="purchase_amount_2">
                </div>
                <div class="mb-3">
                    <label for="purchase_amount_limit" class="form-label">Ödeme Ücreti 2 Sınırı</label>
                    <input type="text" class="form-control" name="purchase_amount_limit">
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-primary">
                        Taksit Ekle
                    </a>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Bankayı kaydet</button>
    </form>
@endsection
