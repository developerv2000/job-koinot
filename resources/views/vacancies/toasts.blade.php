@if (session('success'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img class="toast-image rounded me-2" src="{{ asset('img/main/success.png') }}" alt="success">
                <strong class="me-auto">Успех</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Ваше резюме успешно загружено. Пожалуйста, ожидайте нашего ответа
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img class="toast-image rounded me-2" src="{{ asset('img/main/error.png') }}" alt="error">
                <strong class="me-auto">Ошибка</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>

            <div class="toast-body">
                <ul class="toast-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
