@extends('dashboard.layouts.app', [
    'breadcrumbs' => ['Вакансии', 'Добавить'],

    'actions' => ['store'],
])

@section('main')
    <form class="form" id="create-form" action="{{ route($modelPrefixName . '.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('dashboard.form.create-components.text-input', [
            'label' => 'Имя',
            'name' => 'name',
            'required' => true,
        ])

        @include('dashboard.form.create-components.text-input', [
            'label' => 'Зарплата',
            'name' => 'salary',
            'required' => true,
        ])

        @include('dashboard.form.create-components.wysiwyg-textarea', [
            'label' => 'Текст',
            'name' => 'body',
            'required' => true,
        ])
    </form>
@endsection
