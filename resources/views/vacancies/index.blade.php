@extends('layouts.app')

@section('main')
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

    <section class="vacancies">
        <div class="vacancies__inner main-container">
            <h1 class="vacancies__title main-title">Актуальные вакансии</h1>
            @include('vacancies.tab')
        </div>
    </section>
@endsection
