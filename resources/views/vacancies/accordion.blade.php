<div class="accordion vacancies-accordion" id="vacanciesAccordion">
    @foreach ($vacancies as $vacancy)
        <div class="accordion-item">
            <h2 class="accordion-header vacancy-name">
                <button class="accordion-button @unless ($loop->first) collapsed @endunless" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $vacancy->id }}" aria-expanded="true" aria-controls="collapse{{ $vacancy->id }}">
                    {{ $vacancy->name }}
                </button>
            </h2>

            <div id="collapse{{ $vacancy->id }}" class="accordion-collapse collapse @if ($loop->first) show @endif" data-bs-parent="#vacanciesAccordion">
                <div class="accordion-body">
                    <h2 class="vacancy-name">{{ $vacancy->name }}</h2>
                    <p class="vacancy-salary">{{ $vacancy->salary }}</p>

                    {!! $vacancy->body !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
