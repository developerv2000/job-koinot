@extends('layouts.app')

@section('main')
    {{-- Welcome Banner --}}
    <section class="welcome">
        <img class="welcome__image" src="{{ asset('img/home/banner.png') }}" alt="team">

        <div class="welcome__inner">
            <div class="welcome__inner-content main-container">
                <a class="logo welcome__logo" href="https://koinotinav.tj/">
                    <img class="welcome__logo-image" src="{{ asset('img/main/logo-light.svg') }}" alt="logo">
                </a>

                <h3 class="welcome__title">Раскройте себя! Создайте себя!</h3>

                <div class="welcome__desc-divider">
                    <p class="welcome__desc">С большими возможностями к большим победам вместе!</p>
                    <x-upload-resume class="welcome__upload-resume" />
                </div>
            </div>
        </div>
    </section>

    {{-- Vacancies --}}
    <section class="vacancies">
        <div class="vacancies__inner main-container">
            <h1 class="vacancies__title main-title">Актуальные вакансии</h1>
            @include('vacancies.tab')
            @include('vacancies.accordion')
        </div>
    </section>

    {{-- Values --}}
    <section class="values">
        <div class="values__inner main-container">
            <h3 class="values__title main-title">Нам по пути, если наши ценности совпадают:</h3>

            <div class="values-list">
                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/development.png') }}" alt="development">
                    <h4 class="values-card__title">Развитие</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/transformation.png') }}" alt="transformation">
                    <h4 class="values-card__title">Трансформация</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/professionalism.png') }}" alt="professionalism">
                    <h4 class="values-card__title">Профессионализм</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/team.png') }}" alt="team">
                    <h4 class="values-card__title">Командность</h4>
                </div>

                <div class="values-card">
                    <img class="values-card__image" src="{{ asset('img/home/realization.png') }}" alt="realization">
                    <h4 class="values-card__title">Самореализация</h4>
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
                    <a class="companies__link" href="https://dustipharma.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/dustipharm.png') }}" alt="Dustipharm">
                    </a>

                    <a class="companies__link" href="https://madadpharm.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/madadpharm.png') }}" alt="Madadpharm">
                    </a>

                    <a class="companies__link" href="https://evar.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/evar.png') }}" alt="evar">
                    </a>

                    <a class="companies__link" href="https://www.facebook.com/ToyotaTajMotors/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/taj-motors.png') }}" alt="Taj Motors">
                    </a>

                    <a class="companies__link" href="http://honaiman.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/honai-man.png') }}" alt="Honai Man">
                    </a>

                    <a class="companies__link" href="http://jysk.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/jysk.png') }}" alt="Jysk">
                    </a>

                    <a class="companies__link" href="https://kit.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/kit.png') }}" alt="Kit">
                    </a>

                    <a class="companies__link" href="https://ats.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/ats.png') }}" alt="ATS">
                    </a>

                    <a class="companies__link" href="https://www.salomat.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/salomat.png') }}" alt="Salomat">
                    </a>

                    <a class="companies__link" href="https://khirad.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/khirad.png') }}" alt="Khirad">
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('vacancies.toasts')
@endsection
