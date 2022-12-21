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
                    <label for="queue_no" class="form-label">Sıra No</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label for="bank_name" class="form-label">Banka Adı</label>
                    <input type="text" class="form-control" name="bank_name">
                </div>
                <div class="mb-3">
                    <label for="account_type" class="form-label">Hesap Türü</label>
                    <input type="text" class="form-control" name="account_type">
                </div>
                <div class="mb-3">
                    <label for="branch_code" class="form-label">Şube Kodu</label>
                    <input type="text" class="form-control" name="branch_code">
                </div>
                <div class="mb-3">
                    <label for="account_no" class="form-label">Hesap NO</label>
                    <input type="text" class="form-control" name="account_no">
                </div>
                <div class="mb-3">
                    <label for="iban" class="form-label">IBAN No</label>
                    <input type="text" class="form-control" name="iban">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Bankayı kaydet</button>
    </form>
@endsection
