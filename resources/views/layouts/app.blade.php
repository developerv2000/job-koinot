<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/main/favicon.png') }}">

    <title>Коиноти Нав — Вакансии</title>

    <meta property="og:title" content="Коиноти Нав — Вакансии">
    <meta name="keywords" content="Работа в Таджикистане, работа в Душанбе, карьера в Таджикистане, карьера в Душанбе, вакансии в Душанбе, вакансии в Таджикистане, холдинги Душанбе, свежие вакансии, рабочие места, работа в холдинге, профессиональный рост, развитие, специалисты, вакансии ведущих компаний, карьера в холдинге, работа в команде, сфера деятельности">

    <meta name="description" content="Просмотр вакансий компании КОИНОТИ НАВ. Подробнее о рабочих местах в компании КОИНОТИ НАВ. Присоединяйтесь к нашей команде — свежие вакансии, зарплата, условия работы, возможности, карьерный рост">
    <meta property="og:description" content="Просмотр вакансий компании КОИНОТИ НАВ. Подробнее о рабочих местах в компании КОИНОТИ НАВ. Присоединяйтесь к нашей команде — свежие вакансии, зарплата, условия работы, возможности, карьерный рост">
    <meta property="og:image" content="{{ asset('img/main/share-logo.png') }}">
    <meta property="og:image:alt" content="Коиноти Нав лого">
        
    {{-- Normalize --}}
    <link rel="stylesheet" href="{{ asset('plugins/normalize.css') }}">

    {{-- Bootstrap v5.3 --}}
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}"">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/css/media.css'])
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

    @production
        @include('layouts.metrics')
    @endproduction
</body>

</html>
