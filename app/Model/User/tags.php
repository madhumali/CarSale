<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use App\Model\User\cars;

class tags extends Model
{
    public function cars()
    {
        return $this->belongsToMany('App\Model\User\cars','cars_tags')->paginate(8);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
