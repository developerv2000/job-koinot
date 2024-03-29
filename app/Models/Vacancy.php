<?php

namespace App\Models;

use App\Support\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const DEFAULT_ORDER_BY = 'created_at';
    const DEFAULT_ORDER_TYPE = 'desc';

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    protected static function booted(): void
    {
        static::creating(function ($item) {
            $item->validateSalary();
            $item->validateSlug();
        });

        static::updating(function ($item) {
            $item->validateSalary();
            $item->validateSlug();
        });
    }

    public static function getDashItemsFinalized($params)
    {
        return self::orderBy($params['orderBy'], $params['orderType'])
            ->withCount('resumes')
            ->paginate(30, ['*'], 'page', $params['currentPage'])
            ->appends(request()->except('page'));
    }

    public static function getAllMinified()
    {
        return self::orderBy('name', 'asc')->select('id', 'name')->get();
    }

    public function validateSalary()
    {
        $this->salary = $this->salary ? $this->salary : 'Договорная';
    }

    public function validateSlug()
    {
        $this->slug = Helper::generateSlug($this->name);
    }
}
