<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="csrf_token" name="csrf-token" content="{{ csrf_token() }}">
    <title>Тестовое задание</title>
   {{-- @vite([
    'resources/css/app.css',
    ])--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<main>
    {{ $slot }}
</main>
{{--@vite([
    'resources/js/app.js'
])--}}
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
