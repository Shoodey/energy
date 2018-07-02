<?php

namespace App\Entities;

use App\Observers\GameObserver;

/**
 * @property string name
 * @property mixed user
 * @property mixed id
 */
class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'password', 'is_visible'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['user'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['url', 'elapsed_time', 'is_private'];

    /**
     *  Setup model event hooks.
     */
    protected static function boot()
    {
        parent::boot();
        self::observe(GameObserver::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute(){
        return route('houses.show', $this);
    }

    public function getElapsedTimeAttribute(){
        return 0;
    }

    public function getIsPrivateAttribute(){
        return $this->password != null;
    }
}
