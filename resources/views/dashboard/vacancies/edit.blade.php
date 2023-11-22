@extends('dashboard.layouts.app', [
    'breadcrumbs' => ['Вакансии', 'Редактировать', $item->name],

    'actions' => ['update', 'destroy'],
])

@section('main')
    <form class="form" id="edit-form" action="{{ route($modelPrefixName . '.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('dashboard.form.edit-components.id-input')
        @include('dashboard.form.edit-components.previous-url-input')

        @include('dashboard.form.edit-components.text-input', [
            'label' => 'Название вакансии',
            'placeholder' => '',
            'name' => 'name',
            'required' => true,
        ])

        @include('dashboard.form.edit-components.text-input', [
            'label' => 'Зарплата',
            'placeholder' => 'Договорная',
            'name' => 'salary',
            'required' => false,
        ])

        @include('dashboard.form.edit-components.wysiwyg-textarea', [
            'label' => 'Текст. Пожалуйста, проверьте текст на ошибки, если использовали COPY + PASTE',
            'name' => 'body',
            'required' => true,
        ])
    </form>

    @include('dashboard.modals.single-destroy', ['itemID' => $item->id])
@endsection
