<div class="search search--selectizeable">
    <select class="selectize-singular--linked" placeholder="Поиск...">
        <option></option>
        <option value="{{ route('resumes.dashboard.index') }}"  @selected(!$currentVacancyID)>Все вакансии</option>
        @foreach ($vacancies as $vacancy)
            <option value="{{ route('resumes.dashboard.index') }}?vacancy_id={{ $vacancy->id }}" @selected($vacancy->id == $currentVacancyID)>{{ $vacancy->name }}</option>
        @endforeach
    </select>
</div>
