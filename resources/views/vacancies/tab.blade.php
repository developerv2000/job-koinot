<div class="d-flex align-items-start vacancies-tab">
    {{-- Navs --}}
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        @foreach ($vacancies as $vacancy)
            <div class="nav-link @if ($loop->first) active @endif" id="v-pills-{{ $vacancy->id }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $vacancy->id }}" type="button" role="tab" aria-controls="v-pills-{{ $vacancy->id }}" aria-selected="true">
                <h2 class="vacancy-name">{{ $vacancy->name }}</h2>
                <p class="vacancy-salary">{{ $vacancy->salary }}</p>
            </div>
        @endforeach
    </div>

    {{-- Tab content --}}
    <div class="tab-content" id="vacancies-tabContent">
        @foreach ($vacancies as $vacancy)
            <div class="tab-pane fade @if ($loop->first) show active @endif" id="v-pills-{{ $vacancy->id }}" role="tabpanel" aria-labelledby="v-pills-{{ $vacancy->id }}-tab" tabindex="0">
                <h2 class="vacancy-name">{{ $vacancy->name }}</h2>
                <div class="vacancy-body">{!! $vacancy->body !!}</div>

                <x-upload-resume class="tab-content__upload-resume">
                    <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">
                </x-upload-resume>
            </div>
        @endforeach
    </div>
</div>
