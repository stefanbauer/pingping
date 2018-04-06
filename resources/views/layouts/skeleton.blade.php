<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PingPing is a simple to use website monitoring service, built in public. One year. One Price.">
    <meta name="keywords" content="monitoring, pingping, service check, notification, ssl">

    <meta name="robots" content="@yield('robots', 'index, follow')">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Simple Website Monitoring. One year. One price.">
    <meta name="twitter:description" content="We ping your websites and will notify you when they are down.">
    <meta name="twitter:image" content="{{ asset('images/marketing/social_image.png') }}">
    <meta name="twitter:url" content="https://pingping.io">
    <meta name="twitter:site" content="@pingpingapp">
    <meta name="twitter:creator" content="@stefanbauerme">

    <meta property="og:title" content="Simple Website Monitoring. One year. One price.">
    <meta property="og:description" content="We ping your websites and will notify you when they are down.">
    <meta property="og:image" content="{{ asset('images/marketing/social_image.png') }}">
    <meta property="og:url" content="https://pingping.io">
    <meta property="og:site_name" content="PingPing">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="PingPing">
    <meta name="application-name" content="PingPing">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('pageTitle')
        <title>@yield('pageTitle') | PingPing</title>
    @else
        <title>PingPing - Simple Website Monitoring</title>
    @endif

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    @if (config('pingping.google_analytics.tracking_id') && 'prod' === config('app.env'))
        @include('tracking.google_analytics')
    @endif
</head>
<body class="@yield('bodyClasses')">
    @yield('body')

    @stack('scripts')
</body>
</html>
