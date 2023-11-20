<?php

namespace App\Support\Traits;

use App\Support\Helper;
use Illuminate\Http\Request;

trait Destroyable
{
    public function destroy(Request $request)
    {
        $ids = (array) $request->input('id');

        foreach ($ids as $id) {
            $this->model::find($id)->delete();
        }

        // validate redirect on applicants delete,
        // because model prefix name equals to 'resumes' on applicants index page
        if (strpos(url()->previous(), '/resumes/applicants')) {
            return redirect()->route('resumes.dashboard.applicants');
        }

        return redirect()->route(Helper::getModelPrefixName() . '.dashboard.index');
    }
}
