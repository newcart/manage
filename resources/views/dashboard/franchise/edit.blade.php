@extends('layouts.app')

@section('title', 'Bayi Ekle - Akıllıphone')

@section('content')
    <h1>Yeni Bayi</h1>
    <form method="POST" action="#" class="mb-5">
        {{--        <form class="mb-5">--}}
        {{--            <div>--}}
        {{--                <div class="line">--}}
        {{--                    <div class="title">Müşteri Bilgileri</div>--}}
        {{--                    <hr class="line-styled">--}}
        {{--                </div>--}}
        {{--                <div class="d-flex flex-lg-row gap-3">--}}
        {{--                    <div class="text-box">--}}
        {{--                        <input type="text" placeholder="Ad">--}}
        {{--                    </div>--}}
        {{--                    <div class="text-box">--}}
        {{--                        <input type="text" placeholder="Soyad">--}}
        {{--                    </div>--}}
        {{--                    <div class="text-box">--}}
        {{--                        <input type="email" placeholder="E-Posta">--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <div>
            <div class="line">
                <div class="title">Üye Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-lg-row gap-3">
                <div class="mb-3">
                    <label>
                        Ad
                        <input type="text" class="form-control" name="name" value="{{ $franchise->name }}">
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Soyad
                        <input type="text" class="form-control" name="surname" value="{{ $franchise->surname }}">
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        TC Kimlik No
                        <input type="text" class="form-control" name="id_no" value="{{ $franchise->id_no }}">
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        E-Posta
                        <input type="email" class="form-control" name="email" value="{{ $franchise->email }}">
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Şifre
                        <input type="password" class="form-control" name="password">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Doğum Tarihi</label>
                    <div class="date-picker">
                        <input type="text" id="date-picker" readonly placeholder="Doğum Tarihi" value="{{ $franchise->birthday }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="member_type" class="form-label">Üyelik Tipi</label>
                    @php
                        $options = [
                            '0' => 'Genel Üye',
                            '1' => 'Bayi'
                        ];
                    @endphp
                    <select name="member_type">
                        @foreach($options as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Cinsiyet</label>
                    @php
                        $gender = [
                            '0' => 'Kadın',
                            '1' => 'Erkek'
                        ];
                    @endphp
                    <select name="gender">
                        @foreach($gender as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bulten" class="form-label">E-Bülten</label>
                    @php
                        $bulten = [
                            '0' => 'Evet',
                            '1' => 'Hayır'
                        ];
                    @endphp
                    <select name="bulten">
                        @foreach($bulten as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no_purchase_comment" class="form-label">Satın Almadan Yorum</label>
                    @php
                        $no_purchase_comment = [
                            '0' => 'Evet',
                            '1' => 'Hayır'
                        ];
                    @endphp
                    <select name="no_purchase_comment">
                        @foreach($no_purchase_comment as $value => $option)
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Bayi Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-lg-row gap-3">
                <div class="mb-3">
                    <label>
                        Bakiye
                        <input type="text" class="form-control" name="balance" value="{{ $franchise->balance }}">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="xml" class="form-label">XML İndirme Yetkisi</label>
                    @php
                        $xml = [
                            '0' => 'Evet',
                            '1' => 'Hayır'
                        ];
                    @endphp
                    <select name="xml">
                        @foreach($xml as $value => $option)
                            @if($franchise->xml == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image_permission" class="form-label">Resim İndirme Yetkisi</label>
                    @php
                        $xml = [
                            '0' => 'Evet',
                            '1' => 'Hayır'
                        ];
                    @endphp
                    <select name="image_permission">
                        @foreach($xml as $value => $option)
                            @if($franchise->image_permission == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="lesser_category" class="form-label">Alt Kategori</label>
                    @php
                        $lesser_category = [
                            '0' => 'Alt Kategoriler Aktif',
                            '1' => 'Sadece Seçilen Kategori'
                        ];
                    @endphp
                    <select name="lesser_category">
                        @foreach($lesser_category as $value => $option)
                            @if($franchise->lesser_category == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    @php
                        $category = [
                            '0' => 'Aksesuarlar',
                            '1' => 'Diğer Ürünler'
                        ];
                    @endphp
                    <select name="category">
                        @foreach($category as $value => $option)
                            @if($franchise->$category == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Marka</label>
                    @php
                        $brand = [
                            '0' => 'SM',
                            '1' => 'Nokia'
                        ];
                    @endphp
                    <select name="brand">
                        @foreach($brand as $value => $option)
                            @if($franchise->brand == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tax_certificate" class="form-label">Vergi Levhası</label>
                    <input type="image" name="tax_certificate" class="form-control">
                </div>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Adres Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Adres Açıklama
                    <input type="text" class="form-control" name="address_description" value="{{ $franchise->address_description }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Ülke
                    <input type="text" class="form-control" name="country" value="{{ $franchise->country }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Şehir
                    @php
                        $state = [
                            '0' => 'İstanbul',
                            '1' => 'Ankara'
                        ];
                    @endphp
                    <select name="state">
                        @foreach($state as $value => $option)
                            @if($franchise->state == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Semt
                    @php
                        $city = [
                            '0' => 'Esenyurt',
                            '1' => 'Avcılar'
                        ];
                    @endphp
                    <select name="city">
                        @foreach($city as $value => $option)
                            @if($franchise->city == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Adres
                    <input type="text" class="form-control" name="address" value="{{ $franchise->address }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Adres Tipi
                    @php
                        $address_type = [
                            '0' => 'Teslimat Adresi',
                            '1' => 'Fatura Adresi',
                            '2' => 'Teslimat ve Fatura Adresi'
                        ];
                    @endphp
                    <select name="address_type">
                        @foreach($address_type as $value => $option)
                            @if($franchise->address_type == $value)
                                <option value="{{ $value }}" selected>{{ $option }}</option>
                            @endif
                            <option value="{{ $value }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Telefon
                    <input type="tel" class="form-control" name="phone" value="{{ $franchise->phone }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Cep Telefonu
                    <input type="tel" class="form-control" name="mobile_phone" value="{{ $franchise->mobile_phone }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    İş Telefonu
                    <input type="tel" class="form-control" name="work_phone" value="{{ $franchise->work_phone }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Firma Adı
                    <input type="text" class="form-control" name="company_name" value="{{ $franchise->company_name }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Vergi Dairesi
                    <input type="text" class="form-control" name="tax_office" value="{{ $franchise->tax_office }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Vergi No
                    <input type="text" class="form-control" name="tax_no" value="{{ $franchise->tax_no }}">
                </label>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">Ödeme ve Kargo Seçenekleri</div>
                <hr class="line-styled">
            </div>
            <div>
                <label class="form-label">
                    Kredi Kartı
                    <input type="checkbox" class="form-control" name="credit_card" checked="{{ $franchise->credit_card }}">
                </label>
            </div>
            <div>
                <label class="form-label">
                    Havale EFT
                    <input type="checkbox" class="form-control" name="eft" checked="{{ $franchise->eft }}">
                </label>
            </div>
            <div>
                <label class="form-label">
                    Kapıda Nakit
                    <input type="checkbox" class="form-control" name="cash_on_door" checked="{{ $franchise->cash_on_door }}">
                </label>
            </div>
            <div>
                <label class="form-label">
                    PayU ile Ödeme
                    <input type="checkbox" class="form-control" name="payu" checked="{{ $franchise->payu }}">
                </label>
            </div>
            <div>
                <label class="form-label">
                    Moto-kurye ile Ödeme
                    <input type="checkbox" class="form-control" name="driver_pay" checked="{{ $franchise->driver_pay }}">
                </label>
            </div>
            <div>
                <label class="form-label">
                    Dropshipping
                    <input type="checkbox" class="form-control" name="dropshipping" checked="{{ $franchise->dropshipping }}">
                </label>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script>
        flatpickr.localize(flatpickr.l10ns.tr);
        flatpickr("#date-picker", {
            dateFormat: "d/m/Y",
            disableMobile: "true"
        });
    </script>
@endsection
