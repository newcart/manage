@extends('layouts.app')

@section('title', 'Siparişler | Akıllıphone')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
@endsection

@section('content')
    {!! $topSelectors !!}
    <hr>
    {!! $marketplaceOrders !!}

    {!! $datatable["html"] !!}
@endsection

@section('scripts')
    {!! $datatable["js"] !!}
    <script src="{{ asset('assets/js/custom-select.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.0/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/tr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/plugins/rangePlugin.min.js"></script>
    <script>
        flatpickr.localize(flatpickr.l10ns.tr);
        flatpickr(".date-picker", {
            "plugins": [new rangePlugin({input: "#date-picker2"})],
            dateFormat: "d/m/Y",
            disableMobile: "true"
        });
    </script>
    <script>
        $(function () {
            $(".brand-list").niceScroll({
                cursorcolor: "#808080",
                autohidemode: true,
                emulatetouch: true,
                horizrailenabled: true,
            })
        })
    </script>
@endsection
