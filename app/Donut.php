<?php

namespace App;

# php `artisan make:model Donut` automatically adds this `use` statement for you:
use Illuminate\Database\Eloquent\Model;

# But you must add this `use` statement in order for the `addGlobalScope(...)` closure to work:
use Illuminate\Database\Eloquent\Builder;

# NOT required by Laravel Eloquent global query scopes, but this example does need this:
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
