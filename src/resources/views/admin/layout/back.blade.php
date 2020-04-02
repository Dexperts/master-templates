<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @if(env('APP_ENV') == 'local')
        <title>LOCALHOST- {{ config('master-templates.name') }}</title>
    @else
        <title>Megarun beheer</title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="{{(env('APP_ENV') == 'local') ? 'body--local' : 'body--prod' }}">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<header>
    <div class="header__logo">
        <img class="logo--small" alt="{{config('master-templates.name')}}" src="{{ assets('/img/logo-small.png') }}" />
    </div>
    @include('master-templates::admin.layout.nav')
</header>
<div class="container container--full-screen container--h-center container--v-center container--rows">
    @yield('content')
</div>
<footer>
    <div class="row">
        <div class="col col-md-6 col-md-offset-3 align-center">
            <p>&copy; {{\Carbon\Carbon::now()->year }} Dexperts - dexcms@dexperts.nl</p>
        </div>
    </div>
</footer>
</body>
</html>