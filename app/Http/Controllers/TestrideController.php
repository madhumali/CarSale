<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\Testride;

use Calendar;

class TestrideController extends Controller
{
    public function index(){
        $testrides = Testride::get();
        $testride_list = [];
        foreach ($testrides as $key => $testride) {
            $testride_list[] = Calendar::event(
                $testride->name,
                true,
                new \DateTime($testride->start_date),
                new \DateTime($testride->end_date.' +1 day')

            );
        }
        $calendar_details = Calendar::addEvents($testride_list);

        return view('calender.testrides', compact('calendar_details'));
    }
    
    public function addTestride(Request $request)
    {
        
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'telephone' => 'required',
            'start_date' => 'required'
        ]);

        if($validator ->fails()) {
            \Session::flash('warnning', 'Please enter valid Details');
            return Redirect::to('/testrides')->withInput()->withErrors($validator);
        }

        $testride = new Testride;
        $testride->name =$request['name'];
        $testride->email =$request['email'];
        $testride->telephone =$request['telephone'];
        $testride->start_date =$request['start_date'];
        $testride->end_date =$request['start_date'];
        $testride->save();

        \Session::flash('success', 'Testride added successfully');
        return Redirect::to('/testrides');
    }
}
