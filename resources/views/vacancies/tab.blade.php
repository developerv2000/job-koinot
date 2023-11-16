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

                <form class="upload-resume" action="{{ route('resumes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">

                    <label class="upload-resume__label">
                        <div class="upload-resume__btn">
                            <img class="upload-resume__icon" src="{{ asset('img/main/attach.svg') }}" alt="attach">
                            <span class="upload-resume__desc">Добавить резюме</span>
                        </div>

                        <input class="upload-resume__desc visually-hidden" type="file" name="resume" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
                    </label>
                </form>
            </div>
        @endforeach
    </div>
</div>
