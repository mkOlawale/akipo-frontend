<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta property="og:title" content="@yield('title')">
    <meta name="twitter:title" content="@yield('title')">
@include('partial.header')
</head>
<body>
    <div id="app">
    @include('partial.nav')
    @yield('maincontent')
    </div>
@include('partial.footer')
</body>
</html>