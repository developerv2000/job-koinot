<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Support\Helper;
use App\Support\Traits\Destroyable;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    use Destroyable;

    // used in Destroyable Trait
    public $model = Vacancy::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::latest()->get();

        return view('vacancies.index', compact('vacancies'));
    }

    public function dashboardIndex(Request $request)
    {
        // order parameters
        $params = Helper::getRequestParams('name', 'asc');

        $items = Vacancy::getDashItemsFinalized($params);
        $allItems = Vacancy::getAllMinified();

        return view('dashboard.vacancies.index', compact('params', 'items', 'allItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacancyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
