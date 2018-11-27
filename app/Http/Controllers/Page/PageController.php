<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\cars;
use App\Model\User\categories;
use App\Model\User\tags;

class PageController extends Controller
{
    public function index()
    {
        $cars = cars::where('status',1)->paginate(8);
        return view('main.home',compact('cars'));
    }

    public function cars(cars $cars)
    {
        $recents = cars::orderBy('updated_at','desc')->limit(8)->get();
        $categories = categories::all();
        $tags = tags::all();
        return view('main.addpage',compact('cars','categories','tags','recents'));
    }


    public function tag(tags $tags)
    {
        $category = categories::all();
        $tag = tags::all();
        $cars = $tags->cars();
        return view('main.cattags',compact('cars','category','tag'));
    }

    public function category(categories $categories)
    {
        $category = categories::all();
        $tag = tags::all();
        $cars = $categories->cars();
        return view('main.cattags',compact('cars','category','tag'));
    }

    public function recent()
    {
        $category = categories::all();
        $tag = tags::all();
        $cars = cars::orderBy('updated_at','desc')->limit(8)->get();
        return view('main.recent',compact('cars','category','tag'));
    }

    // edit here
    public function search()
    {
        $category = categories::all();
        $tag = tags::all();
        //$cars =;//search here
        return view('main.search',compact('cars','category','tag'));
    }
    
}
