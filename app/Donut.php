<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Scopes\StaleScope;

class Donut extends Model
{
    public function scopeExcludeFresh($query)
    {
        $now = Carbon::now();
        return $query->where('baked_at', '<=', $now->subDay());
    }

    public function scopeExcludeStale($query)
    {
        $now = Carbon::now();
        return $query->where('baked_at', '>=', $now->subDays(3));
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StaleScope);
    }
}
