@extends('dashboard.layouts.app', [
    'breadcrumbs' => [
        'Все резюме - ' . $allItemsCount . ' элементов'
    ],

    'actions' => [
        'multiselect',
        'multiple-destroy'
    ]
])

@section('main')
    @include('dashboard.resumes.filter')

    <div class="table-container">
        @include('dashboard.tables.resumes')
    </div>

    @include('dashboard.modals.single-destroy')
    @include('dashboard.modals.multiple-destroy')
@endsection
