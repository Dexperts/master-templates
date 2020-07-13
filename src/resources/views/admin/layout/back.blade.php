<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @if(env('APP_ENV') == 'local')
        <title>LOCALHOST- {{ config('master-templates.name') }}</title>
    @else
        <title>{{ config('master-templates.name') }}</title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.typekit.net/cpu4iba.css" media="screen">
    <link rel="stylesheet" href="{{asset('vendor/master-templates/css/master-templates.css')}}" media="print" onload="this.media='screen'">
</head>
<body class="{{(env('APP_ENV') == 'local') ? 'body--local' : 'body--prod' }}">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<header class="header">
    <div class="header--content">
        <img class="logo logo--small" alt="{{config('master-templates.name')}}" src="{{ asset('vendor/master-templates/img/dems-logo-sig.svg') }}" />
    </div>
    <div class="header--navigation">
        @include('master-templates::admin.layout.nav')
    </div>
</header>
<div class="container container--full-screen">
    @yield('content')
</div>
<footer class="footer">
    <p>&copy; {{\Carbon\Carbon::now()->year }} MoveReclame - <a href="mailto:stef@movereclame.nl" title="stef@movereclame.nl" class="link--footer">stef@movereclame.nl</a></p>
</footer>
</body>
</html>