<?php

namespace App\Models;

use App\Support\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'new'];
    protected $with = ['vacancy:id,name'];

    const DEFAULT_ORDER_BY = 'created_at';
    const DEFAULT_ORDER_TYPE = 'desc';

    const STORAGE_PATH = 'app/resumes';

    protected static function booted(): void
    {
        static::deleting(function ($item) {
            // Delete file from storage
            $filepath = storage_path(self::STORAGE_PATH . '/' . $item->filename);
            Helper::deleteFileIfExists($filepath);
        });
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }

    public static function handleStoreRequest($request)
    {
        $merged = $request->safe()->merge(['filename' => 'uploading']);
        $resume = self::create($merged->all());

        // Generate filename and Upload resume
        $file = $request->file('resume');
        $filename = $resume->generateFilename($file->getClientOriginalExtension());
        $file->move(storage_path(self::STORAGE_PATH), $filename);

        // update resume
        $resume->filename = $filename;
        $resume->save();
    }

    public static function getDashItemsFinalized($params)
    {
        $vacancy_id = request()->vacancy_id;

        return self::orderBy($params['orderBy'], $params['orderType'])
            ->when($vacancy_id, function ($query, $vacancy_id) {
                $query->where('vacancy_id', $vacancy_id);
            })
            ->paginate(30, ['*'], 'page', $params['currentPage'])
            ->appends(request()->except('page'));
    }

    public function download()
    {
        $this->new = false;
        $this->save();

        $filepath = storage_path(self::STORAGE_PATH . '/' . $this->filename);

        return response()->download($filepath);
    }

    private function generateFilename($extension)
    {
        $filename = $this->id . ') ' . $this->vacancy->name . date(' d-m-Y') . '.' . $extension;

        return Helper::sanitizeFilename($filename);
    }
}
