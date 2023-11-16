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

    const STORAGE_PATH = 'app/resumes';

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

    private function generateFilename($extension)
    {
        $filename = $this->id . ') ' . $this->vacancy->name . date(' d-m-Y') . '.' . $extension;

        return Helper::sanitizeFilename($filename);
    }
}
