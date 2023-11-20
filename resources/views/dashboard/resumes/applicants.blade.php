@extends('dashboard.layouts.app', [
    'breadcrumbs' => [
        'Все соискатели - ' . $allItemsCount . ' элементов'
    ],

    'actions' => [
        'multiselect',
        'multiple-destroy'
    ]
])

@section('main')
    <div class="table-container">
        @include('dashboard.tables.applicants')
    </div>

    @include('dashboard.modals.single-destroy')
    @include('dashboard.modals.multiple-destroy')
@endsection
