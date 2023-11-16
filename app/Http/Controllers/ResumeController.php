<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Http\Requests\StoreResumeRequest;
use App\Http\Requests\UpdateResumeRequest;
use App\Models\Vacancy;

class ResumeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResumeRequest $request)
    {
        Resume::handleStoreRequest($request);

        return redirect()->back()->with('success', 'success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
