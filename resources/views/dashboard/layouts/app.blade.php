<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Админка — {{ env('APP_NAME') }}</title>

    {{-- Noindex --}}
    <meta name="robots" content="none" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="yandex" content="none">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    {{-- Selectize --}}
    <link rel="stylesheet" href="{{ asset('plugins/selectize/selectize.css') }}">

    {{-- Simditor v2.3.28 --}}
    <link rel="stylesheet" href="{{ asset('plugins/simditor/simditor.css') }}">

    {{-- Normalize CSS --}}
    <link rel="stylesheet" href="{{ asset('plugins/normalize.css') }}">

    <link rel="stylesheet" href="{{ asset('dash/styles.css') }}">
</head>

<body class="body">
    @include('dashboard.layouts.header')
    @include('dashboard.layouts.aside')

    <main class="main">
        @include('dashboard.layouts.errors')
        <x-spinner />
        @yield('main')
    </main>

    {{-- JQuery --}}
    <script src="{{ asset('plugins/jquery-3.6.4.min.js') }}"></script>

    {{-- Selectize --}}
    <script src="{{ asset('plugins/selectize/selectize.min.js') }}"></script>

    {{-- Simditor v2.3.28 --}}
    <script src="{{ asset('plugins/simditor/module.js') }}"></script>
    <script src="{{ asset('plugins/simditor/hotkeys.js') }}"></script>
    <script src="{{ asset('plugins/simditor/uploader.js') }}"></script>
    <script src="{{ asset('plugins/simditor/simditor.js') }}"></script>

    <script src="{{ asset('dash/script.js') }}"></script>
</body>

</html>
