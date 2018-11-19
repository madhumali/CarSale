<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use App\Model\User\cars;

class categories extends Model
{
    public function cars()
    {
        return $this->belongsToMany('App\Model\User\cars','category_cars')->paginate(8);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
