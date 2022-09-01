<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/scss/mini.css') }}">
    <link rel="shortcut icon" href="https://www.akilliphone.com/views/kuteshop/img/favicon.png?v=9" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/notify.css') }}">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    @notifyJs
</head>

<body>
    <section class="login-screen">
        <div class="login-screen-left">
            <div class="left-img">
                <img src="{{ asset('assets/images/login-left.svg') }}" alt="">
            </div>
            <div class="content">
                <div class="title"><span class="title-left">Akıllı</span> <span class="title-right">Panel</span>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor
                    invidunt ut
                </div>
            </div>
        </div>
        <div class="login-screen-right">
            <div class="form-wrapper">
                <div class="logo">
                    <img src="{{ asset('assets/images/akilliphone_logo.svg') }}" alt="logo">
                </div>

                @yield('form')

            </div>
        </div>
    </section>

    @yield('scripts')
    @include('sections.NotifyJs')
</body>

</html>
