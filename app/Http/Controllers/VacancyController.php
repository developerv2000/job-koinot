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

    public function index(Request $request)
    {
        $vacancies = Vacancy::latest()->get();

        // set active vacancy as first item to highlight
        $activeVacancy = null;

        if ($request->vacancy) {
            $activeVacancy = Vacancy::where('slug', $request->vacancy)->first();

            $vacancies = $vacancies->reject(function ($value) use ($activeVacancy) {
                return $value->id == $activeVacancy->id;
            });

            $vacancies = $vacancies->prepend($activeVacancy);
        }

        return view('vacancies.index', compact('vacancies', 'activeVacancy'));
    }

    public function dashboardIndex(Request $request)
    {
        // order parameters
        $params = Helper::getRequestParamsFor(Vacancy::class);

        $items = Vacancy::getDashItemsFinalized($params);
        $allItems = Vacancy::getAllMinified();

        return view('dashboard.vacancies.index', compact('params', 'items', 'allItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacancyRequest $request)
    {
        Vacancy::create($request->all());

        return redirect()->route('vacancies.dashboard.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $item)
    {
        return view('dashboard.vacancies.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request)
    {
        $item = Vacancy::find($request->id);
        $item->update($request->all());

        return redirect($request->input('previous_url'));
    }
}
