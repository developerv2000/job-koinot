@extends('dashboard.layouts.app', [
    'breadcrumbs' => ['Вакансии', 'Добавить'],

    'actions' => ['store'],
])

@section('main')
    <form class="form" id="create-form" action="{{ route($modelPrefixName . '.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('dashboard.form.create-components.text-input', [
            'label' => 'Название вакансии',
            'placeholder' => '',
            'name' => 'name',
            'required' => true,
        ])

        @include('dashboard.form.create-components.text-input', [
            'label' => 'Зарплата',
            'placeholder' => 'Договорная',
            'name' => 'salary',
            'required' => false,
        ])

        @include('dashboard.form.create-components.wysiwyg-textarea', [
            'label' => 'Текст. Пожалуйста, проверьте текст на ошибки, если использовали COPY + PASTE',
            'name' => 'body',
            'required' => true,
        ])
    </form>
@endsection
