<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Model\User\tags','cars_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Model\User\categories','category_cars')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
