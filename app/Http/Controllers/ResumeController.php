<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Http\Requests\StoreResumeRequest;
use App\Models\Vacancy;
use App\Support\Helper;
use App\Support\Traits\Destroyable;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    use Destroyable;

    // used in Destroyable Trait
    public $model = Resume::class;

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResumeRequest $request)
    {
        Resume::handleStoreRequest($request);

        return redirect()->back()->with('success', 'success!');
    }

    public function dashboardIndex(Request $request)
    {
        // order parameters
        $params = Helper::getRequestParamsFor(Resume::class);

        // used in filter
        $vacancies = Vacancy::getAllMinified();
        $currentVacancyID = $request->vacancy_id;

        $items = Resume::getDashItemsFinalized($params);
        $allItemsCount = Resume::count();

        return view('dashboard.resumes.index', compact('params', 'items', 'allItemsCount', 'vacancies', 'currentVacancyID'));
    }

    public function download(Request $request, Resume $resume)
    {
        return $resume->download();
    }
}
