<aside class="aside thin-scrollbar">
    <nav class="navbar">
        {{-- Main Links --}}
        <ul class="menu">
            <li class="menu__item">
                <h3 class="menu__item-title">Основные</h3>
            </li>

            {{-- Resumes --}}
            <li class="menu__item">
                <a class="menu__link @if ($routeName == 'resumes.dashboard.index') menu__link--active @endif" href="{{ route('resumes.dashboard.index') }}">
                    <span class="material-symbols-outlined">description</span> Резюме
                </a>
            </li>

            <li class="menu__item">
                <a class="menu__link @if ($routeName == 'resumes.dashboard.applicants') menu__link--active @endif" href="{{ route('resumes.dashboard.applicants') }}">
                    <span class="material-symbols-outlined">manage_search</span> Резерв
                </a>
            </li>

            {{-- Vacancies --}}
            <li class="menu__item">
                <a class="menu__link @if ($modelPrefixName == 'vacancies') menu__link--active @endif" href="{{ route('vacancies.dashboard.index') }}">
                    <span class="material-symbols-outlined">format_list_bulleted</span> Вакансии
                </a>
            </li>
        </ul>

        {{-- Additional Links --}}
        <ul class="menu">
            <li class="menu__item">
                <h3 class="menu__item-title">Дополнительно</h3>
            </li>

            <li class="menu__item">
                <a class="menu__link" href="{{ route('vacancies.index') }}" target="_blank">
                    <span class="material-symbols-outlined">home</span> Перейти на сайт
                </a>
            </li>

            <li class="menu__item">
                <form class="menu__form" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="menu__form-button">
                        <span class="material-symbols-outlined">exit_to_app</span> Выйти
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
