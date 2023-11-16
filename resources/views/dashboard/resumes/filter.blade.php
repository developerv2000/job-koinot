<div class="search search--selectizeable">
    <select class="selectize-singular--linked">
        <option value="{{ route('resumes.dashboard.index') }}">Все вакансии</option>
        @foreach ($vacancies as $vacancy)
            <option value="{{ route('resumes.dashboard.index') }}?vacancy_id={{ $vacancy->id }}" @selected($vacancy->id == $currentVacancyID)>{{ $vacancy->name }}</option>
        @endforeach
    </select>
</div>
