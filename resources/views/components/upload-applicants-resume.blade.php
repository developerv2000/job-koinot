<form class="upload-resume upload-resume--applicants" action="{{ route('resumes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label class="upload-resume__label">
        <div class="upload-resume__button">
            <img class="upload-resume__button-icon" src="{{ asset('img/main/attach.svg') }}" alt="attach">
            <span class="upload-resume__button-desc">Прикрепить файл</span>
        </div>

        <input class="upload-resume__input visually-hidden" type="file" name="resume"
            accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
    </label>
</form>
