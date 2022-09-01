@extends('layouts.app')

@section('title', 'Panel - Akıllıphone')

@section('content')
    <small>burası dashboard content.</small>
    <br>
    <h1>Merhaba! {{ Auth::user()->name }}</h1>
@endsection


@section('scripts')
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/chart.js') }}"></script>
<script>
    $('.js-tilt').tilt({
        glare: true,
        maxGlare: .5
    })
</script>
@endsection
