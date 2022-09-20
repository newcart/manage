@extends('layouts.app')

@section('title', 'Siparişler | Akıllıphone')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
@endsection

@section('content')
<div class="container-xxl p-lg-0">
    <div class="product-list">
      <div class="product-list-top justify-content-center justify-content-xxl-start" style="row-gap:20px;">
        <div class="title">Siparişler</div>
        <x-button :class="''" :address="''" :icon="asset('assets/images/new-user.svg')" :title="'Yeni Sipariş Ekle'"></x-button>
        <x-select ></x-select>
        <x-select ></x-select>
        <x-select ></x-select>
        <div class="date-picker-area">
           <x-date></x-date>
           <span>arasında</span>
           <x-date></x-date>
           <button class="filter">Filtrele</button>
        </div>
      </div>
    </div>
</div>
<hr>
<div class="container-xxl p-lg-0">
  <div class="brand-list">
    <a class="brand" href="#">
        <div class="brand-logo"></div>
        <div class="brand-info">
            <div class="brand-title">Akıllıphone</div>
            <div class="brand-order">
              <span>589</span><span>Sipariş</span>
            </div>
        </div>
    </a>
    <a class="brand" href="#">
      <div class="brand-logo">
        <img src="assets/svg/hepsiburada.svg" alt="hepsiburada">
      </div>
      <div class="brand-info">
          <div class="brand-title">Hepsiburada</div>
          <div class="brand-order">
            <span>589</span><span>Sipariş</span>
          </div>
      </div>
    </a>
    <a class="brand" href="#">
      <div class="brand-logo">
        <img src="assets/svg/n11.svg" alt="n11">
      </div>
      <div class="brand-info">
          <div class="brand-title">n11</div>
          <div class="brand-order">
            <span>589</span><span>Sipariş</span>
          </div>
      </div>
    </a>
    <a class="brand" href="#">
      <div class="brand-logo">
        <img src="assets/svg/trendyol.svg" alt="trendyol">
      </div>
      <div class="brand-info">
          <div class="brand-title">Trendyol</div>
          <div class="brand-order">
            <span>589</span><span>Sipariş</span>
          </div>
      </div>
    </a>
    <a class="brand" href="#">
      <div class="brand-logo">
        <img src="assets/svg/ciceksepeti.svg" alt="ciceksepeti">
      </div>
      <div class="brand-info">
          <div class="brand-title">Çiçeksepeti</div>
          <div class="brand-order">
            <span>589</span><span>Sipariş</span>
          </div>
      </div>
    </a>
    <a class="brand" href="#">
      <div class="brand-logo">
        <img src="assets/svg/amazon.svg" alt="Amazon">
      </div>
      <div class="brand-info">
          <div class="brand-title">Amazon</div>
          <div class="brand-order">
            <span>589</span><span>Sipariş</span>
          </div>
      </div>
    </a>
    <a class="brand" href="#">
      <div class="brand-logo">
        <img src="assets/svg/pttavm.svg" alt="Epttavm">
      </div>
      <div class="brand-info">
          <div class="brand-title">Epttavm</div>
          <div class="brand-order">
            <span>589</span><span>Sipariş</span>
          </div>
      </div>
    </a>
  </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom-select.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.0/jquery.nicescroll.min.js" ></script>
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/tr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/plugins/rangePlugin.min.js" ></script>
    <script>
        flatpickr.localize(flatpickr.l10ns.tr);
        flatpickr(".date-picker", {
            "plugins": [new rangePlugin({ input: "#date-picker2"})],
            dateFormat: "d/m/Y",
            disableMobile: "true"
        });
    </script>
    <script>
      $(function(){
        $(".brand-list").niceScroll({
        cursorcolor: "#808080",
        autohidemode: true,
        emulatetouch: true,
        horizrailenabled: true,
      })
      })
    </script>
@endsection
