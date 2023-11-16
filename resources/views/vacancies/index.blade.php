@extends('layouts.app')

@section('main')
    {{-- Welcome Banner --}}
    <section class="welcome">
        <img class="welcome__image" src="{{ asset('img/home/banner.png') }}" alt="team">

        <div class="welcome__inner">
            <div class="welcome__inner-content main-container">
                <img class="welcome__logo" src="{{ asset('img/main/logo-light.svg') }}" alt="logo">
                <h3 class="welcome__title">Раскройте себя! Создайте себя!</h3>
                <p class="welcome__desc">С большими возможностями к большим победам вместе!</p>
            </div>
        </div>
    </section>

    {{-- Vacancies --}}
    <section class="vacancies">
        <div class="vacancies__inner main-container">
            <h1 class="vacancies__title main-title">Актуальные вакансии</h1>
            @include('vacancies.tab')
        </div>
    </section>

    {{-- Values --}}
    <section class="values">
        <div class="values__inner main-container">
            <h3 class="values__title main-title">Нам по пути, если наши ценности совпадают:</h3>

            <div class="values-list">
                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/development.svg') }}" alt="development">
                    <h4 class="values-card__title">Развитие</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/transformation.svg') }}" alt="transformation">
                    <h4 class="values-card__title">Трансформация</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/discipline.svg') }}" alt="discipline">
                    <h4 class="values-card__title">Дисциплина</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/team.svg') }}" alt="team">
                    <h4 class="values-card__title">Командность</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- Development --}}
    <section class="development">
        <div class="development__inner main-container">
            <h3 class="development__title main-title">Как мы Развиваем?</h3>

            <div class="carousel-container">
                <div class="gallery-carousel owl-carousel">
                    <img src="{{ asset('img/gallery/1.JPG') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/2.JPG') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/3.JPG') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/4.JPG') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/5.JPG') }}" alt="gallery">
                </div>
            </div>
        </div>
    </section>

    {{-- Companies --}}
    <section class="companies">
        <div class="companies__inner main-container">
            <h3 class="companies__title main-title">Наши компании:</h3>

            <div class="carousel-container">
                <div class="companies-carousel owl-carousel">
                    <a class="companies__link" href="#" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/neouniverse.png') }}" alt="Neouniverse">
                    </a>

                    <a class="companies__link" href="#" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/evolet.png') }}" alt="evolet">
                    </a>

                    <a class="companies__link" href="#" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/salomat.png') }}" alt="salomat">
                    </a>

                    <a class="companies__link" href="#" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/evar.png') }}" alt="evar">
                    </a>

                    <a class="companies__link" href="#" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/belinda.png') }}" alt="belinda">
                    </a>

                    <a class="companies__link" href="#" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/neouniverse.png') }}" alt="Neouniverse">
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('vacancies.toasts')
@endsection
