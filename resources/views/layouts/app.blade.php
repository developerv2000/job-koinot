<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/main/favicon.png') }}">

    <title>Коиноти Нав</title>

    {{-- Noindex --}}
    <meta name="robots" content="none" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="yandex" content="none">

    {{-- Normalize --}}
    <link rel="stylesheet" href="{{ asset('plugins/normalize.css') }}">

    {{-- Bootstrap v5.3 --}}
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}"">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">

    {{-- Styles --}}
    @vite('resources/css/app.css')
</head>

<body>
    <main class="main">
        @yield('main')
    </main>

    @include('layouts.footer')

    <x-spinner />

    {{-- JQuery --}}
    <script src="{{ asset('plugins/jquery-3.6.4.min.js') }}"></script>

    {{-- Bootstrap v5.3 --}}
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>

    {{-- Owl Carousel --}}
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>

    {{-- Scripts --}}
    @vite('resources/js/app.js')
</body>

</html>
