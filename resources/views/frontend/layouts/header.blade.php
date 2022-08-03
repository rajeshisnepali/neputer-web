<head>
    <meta charset="utf-8"/>
    <title>@yield('title', config('app.name'))</title>
    <meta name="keywords" content="@yield('keywords', config('app.name'))">
    <meta name="description" content="@yield('description', config('app.name'))">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#2e2a8f">
    <link href="{{asset('Frontend/images/favicon.png')}}" rel="icon">
    <link href="{{ asset('Frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('Frontend/css/plugin.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/responsive.css')}}" rel="stylesheet">

    @if (app()->environment('production'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178475772-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-178475772-1');
    </script>
    @endif

    <style>
        .dsk-logo .nav-brand img {
            max-height: 55px;
        }
    </style>

    @stack('css')
</head>