@extends('layouts.app')

@section('title', 'Panel - Akıllıphone')

@section('content')
    <div class="general-report">
        <div class="general-report-header d-block d-lg-flex justify-content-between ">
            <div class="title-section mb-2 mb-lg-0 justify-content-center">
                <img class="me-2" src="{{ asset('assets/images/general-report.svg') }}" alt="Genel Rapor">
                Genel Rapor
            </div>
            <div class="date-section d-block d-lg-flex align-items-center justify-content-between ">
                <div class="date-tabs mb-2 mb-lg-0">
                    <ul class="justify-content-center">
                        <li>
                            <a class="date-link" href="#">Bugün</a>
                        </li>
                        <li>
                            <a class="date-link active-tab" href="#">Hafta</a>
                        </li>
                        <li>
                            <a class="date-link" href="#">Ay</a>
                        </li>
                        <li>
                            <a class="date-link" href="#">3 Ay</a>
                        </li>
                        <li>
                            <a class="date-link" href="#">Yıl</a>
                        </li>
                    </ul>
                </div>
                <div class="date-current justify-content-center">
                    <img src="{{ asset('assets/images/date.svg') }}" alt="Tarih"><span>24 May - 23 Eki 2022</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row h-100">

                    {!! $cardPartOne !!}

                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="report-box" style="height:440px">
                    <div class="position-relative">
                        <div id="chart">
                        </div>
                        <div class="options">
                            ...
                            <div class="selects">
                                <button id="data1">En Çok Ziyaret Edilen Kategoriler</button>
                                <button id="data2">Başka bir value</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:40px;">
            <div class="col-12 col-lg-6">
                <div class="row">

                    {!! $cardPartTwo !!}

                </div>
            </div>
            @include('dashboard._partials._twin_card')
        </div>
@endsection


@section('scripts')
        <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
        <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
        <script>
            $('.js-tilt').tilt({
                glare: true,
                maxGlare: .5
            })
        </script>
    {!! $pieChartScript !!}
@endsection
