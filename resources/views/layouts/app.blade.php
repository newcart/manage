<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.css') }}">

    <link rel="shortcut icon" href="https://www.akilliphone.com/views/kuteshop/img/favicon.png?v=9" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/notify.css') }}">
    @yield('css')
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    @notifyJs
</head>

<body>
    <x:notify-messages />

    {!! $navbar !!}

    <main>
        {!! $sidebar !!}
        <section class="main-content">
            @yield('content')
        </section>
    </main>

    @yield('scripts')
    @include('sections.NotifyJs')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
</body>

</html>
