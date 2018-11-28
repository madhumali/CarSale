<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use App\Model\User\categories;
use App\Model\User\tags;

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

    public static function search($keyword) {

        $carsByTags = cars::whereHas('tags', function($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%')
            ->union(tags::where('slug', 'like', '%' . $keyword . '%'));
        });

        $carsByCategories = cars::whereHas('categories', function($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%')
            ->union(categories::where('slug', 'like', '%' . $keyword . '%'));
        });

        $matchingCars = cars::where('title', 'like', '%' . $keyword . '%')
        ->union(cars::where('subtitle', 'like', '%' . $keyword . '%'))
        ->union(cars::where('slug', 'like', '%' . $keyword . '%'))
        ->union(cars::where('body', 'like', '%' . $keyword . '%'));


        $matchingCars = $matchingCars->union($carsByTags)->union($carsByCategories);

        return $matchingCars->get();
    }
}
