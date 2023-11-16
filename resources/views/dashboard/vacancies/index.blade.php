@extends('dashboard.layouts.app', [
    'breadcrumbs' => [
        'Все вакансии - ' . $allItems->count() . ' элементов'
    ],

    'actions' => [
        'create',
        'multiselect',
        'multiple-destroy'
    ]
])

@section('main')
    @include('dashboard.searches.linked', ['titleColumn' => 'name'])

    <div class="table-container">
        {{-- @include('dashboard.tables.authors') --}}
    </div>

    @include('dashboard.modals.single-destroy')
    @include('dashboard.modals.multiple-destroy')
@endsection
