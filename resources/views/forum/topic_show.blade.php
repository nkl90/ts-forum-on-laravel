<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Forum</title>
</head>
<body>
    <h1>Топик № {{ $uuid }} @isset ($page), страница {{ $page }} @endisset</h1>
</body>
</html>
