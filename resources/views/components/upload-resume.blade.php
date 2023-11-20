<form class="upload-resume {{ $attributes['class'] }}" action="{{ route('resumes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{ $slot }}

    <label class="upload-resume__label">
        <x-upload-resume-button />
        <input class="upload-resume__input visually-hidden" type="file" name="resume"
            accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
    </label>
</form>
