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
            'label' => 'Имя',
            'name' => 'name',
            'required' => true,
        ])

        @include('dashboard.form.edit-components.text-input', [
            'label' => 'Зарплата',
            'name' => 'salary',
            'required' => true,
        ])

        @include('dashboard.form.edit-components.wysiwyg-textarea', [
            'label' => 'Текст',
            'name' => 'body',
            'required' => true,
        ])
    </form>

    @include('dashboard.modals.single-destroy', ['itemID' => $item->id])
@endsection
