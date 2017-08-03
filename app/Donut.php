<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Donut extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('stale', function (Builder $builder) {
            $builder->where('baked_at', '>=', Carbon::now()->subDays(3));
        });
    }
}
