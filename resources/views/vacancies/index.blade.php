@extends('layouts.app')

@section('main')
    {{-- Welcome Banner --}}
    <section class="welcome">
        <div class="welcome__inner main-container">
            <a class="logo welcome__logo" href="https://koinotinav.tj/">
                <img class="welcome__logo-image" src="{{ asset('img/main/logo-light.svg') }}" alt="logo">
            </a>

            <h3 class="welcome__title">Раскройте себя! Создайте себя!</h3>
            <p class="welcome__desc">С большими возможностями к большим победам вместе!</p>
        </div>
    </section>

    {{-- Vacancies --}}
    <section class="vacancies">
        <div class="vacancies__inner main-container">
            <h1 class="vacancies__title main-title">Актуальные вакансии ({{ $vacancies->count() }})</h1>
            @include('vacancies.tab')
            @include('vacancies.accordion')

            <div class="vacancies__applicants">
                <p class="vacancies__applicants-text">Если вы не нашли подходящую вакансию, прикрепить свое резюме</p>
                <x-upload-applicants-resume />
            </div>
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
                    <img src="{{ asset('img/gallery/1.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/2.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/3.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/4.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/5.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/6.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/7.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/8.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/9.jpg') }}" alt="gallery">
                    <img src="{{ asset('img/gallery/10.jpg') }}" alt="gallery">
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
                        <img class="companies__image" src="{{ asset('img/companies/dustipharm.svg') }}" alt="Dustipharm">
                    </a>

                    <a class="companies__link" href="https://madadpharm.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/madadpharm.svg') }}" alt="Madadpharm">
                    </a>

                    <a class="companies__link" href="http://honaiman.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/honai-man.svg') }}" alt="Honai Man">
                    </a>

                    <a class="companies__link" href="https://evar.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/evar.svg') }}" alt="evar">
                    </a>

                    <a class="companies__link" href="https://www.facebook.com/ToyotaTajMotors/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/taj-motors.svg') }}" alt="Taj Motors">
                    </a>

                    <a class="companies__link" href="http://jysk.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/jysk.svg') }}" alt="Jysk">
                    </a>

                    <a class="companies__link" href="https://kit.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/kit.svg') }}" alt="Kit">
                    </a>

                    <a class="companies__link" href="https://ats.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/ats.svg') }}" alt="ATS">
                    </a>

                    <a class="companies__link" href="https://www.salomat.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/salomat.svg') }}" alt="Salomat">
                    </a>

                    <a class="companies__link" href="https://khirad.tj/" target="_blank">
                        <img class="companies__image" src="{{ asset('img/companies/khirad.svg') }}" alt="Khirad">
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('vacancies.toasts')
@endsection
