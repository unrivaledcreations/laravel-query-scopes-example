<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\StaleScope;

class Donut extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StaleScope);
    }
}
