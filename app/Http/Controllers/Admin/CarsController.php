<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\cars;
use App\Model\User\tags;
use App\Model\User\categories;
use Illuminate\Support\Facades\Storage;
use Image;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = cars::all();
        return view('admin.cars.show',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tags::all();
        $categories = categories::all();
        return view('admin.cars.create',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = new cars();

        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image2 = $request->file('image');

            $filename = time().'.'.$image->getClientOriginalName();
            $filename2 = time().'.'.$image2->getClientOriginalName();

            $location = public_path('/images/cars/'.$filename);
            $location2 = public_path('/images/cars/front/'.$filename2);

            Image::make($image)->resize(900,300)->save($location);
            Image::make($image2)->resize(800,800)->save($location2);

            $cars->image = $filename;
            $cars->image2 = $filename2;
        }

        
        $cars->title = $request->title;
        $cars->subtitle = $request->subtitle;
        $cars->slug = $request->slug;
        $cars->body = $request->body;
        $cars->status = $request->status;
        $cars->save();
        $cars->tags()->sync($request->tags);
        $cars->categories()->sync($request->categories);

        return redirect(route('cars.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function edit($id)
    {
        $cars = cars::with('tags','categories')->where('id',$id)->first();
        $tags = tags::all();
        $categories = categories::all();
        return view('admin.cars.edit',compact('tags','categories','cars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cars = cars::find($id);

        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',

        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image2 = $request->file('image');

            $filename = time().'.'.$image->getClientOriginalName();
            $filename2 = time().'.'.$image2->getClientOriginalName();

            $location = public_path('images/cars/'.$filename);
            $location2 = public_path('images/cars/front/'.$filename2);

            Image::make($image)->resize(900,300)->save($location);
            Image::make($image2)->resize(800,800)->save($location2);

            $oldFilename = $cars->image;
            $oldFilename2 = $cars->image2;
            //Update the database
            $cars->image = $filename;
            $cars->image2 = $filename2;
            //Delete the old photo
            Storage::delete('images/cars/'.$oldFilename);
            Storage::delete('images/carss/front/'.$oldFilename2);
        }

        $cars->title = $request->title;
        $cars->subtitle = $request->subtitle;
        $cars->slug = $request->slug;
        $cars->body = $request->body;
        $cars->status = $request->status;
        $cars->tags()->sync($request->tags);
        $cars->categories()->sync($request->categories);
        $cars->save();

        return redirect(route('cars.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = cars::find($id);
        Storage::delete('images/cars/'.$cars->image);
        Storage::delete('images/cars/front/'.$cars->image2);
        cars::where('id',$id)->delete();
        return redirect()->back();
    }
}
