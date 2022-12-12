<div class="container-xxl p-lg-0">
    <div class="product-list">
        <div class="product-list-top justify-content-center justify-content-xxl-start" style="row-gap:20px;">
            <div class="title">Siparişler </div>
            <div class="get-products">
                <a href="{{ route('panel.orders.new') }}">
                    <img src="{{ asset('assets/images/new-order.svg') }}" alt="get product">
                    Yeni Sipariş Ekle
                </a>
            </div>
            <div class="custom-select" >
                <select name="orderStatus">
                    @foreach($orderStatus as $value => $option)
                        <option value="{{ $value }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
            <div class="custom-select">
                <select name="paymentType">
                    @foreach($paymentType as $value => $option)
                        <option value="{{ $value }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
            <div class="custom-select">
                <select name="userType">
                    @foreach($userType as $value => $option)
                        <option value="{{ $value }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
            <div class="date-picker-area">
                <input type="text" class="date-picker" readonly placeholder="Tarih">
                <span>arasında</span>
                <input type="text" id="date-picker2" placeholder="...">
                <button class="filter">Filtrele</button>
            </div>
        </div>
    </div>
</div>

