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

        return redirect()->route(Helper::getModelPrefixName() . '.dashboard.index');
    }
}
