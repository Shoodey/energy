<?php

namespace App\Entities;

use App\Observers\ModelObserver;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Carbon;

abstract class Model extends BaseModel
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Override the primary key type.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
    ];

    /**
     *  Setup model event hooks.
     */
    protected static function boot()
    {
        parent::boot();
        self::observe(ModelObserver::class);
    }

    public function getUpdatedAtAttribute($value) {
        return Carbon::parse($value)->timestamp;
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->timestamp;
    }
}