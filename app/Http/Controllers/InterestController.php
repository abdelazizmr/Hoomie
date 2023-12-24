<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index(){
        $interests = Interest::where('user_id', auth()->id())->first();
        $cities = City::all();
        return view('users.interest', compact('interests', 'cities'));
    }

    public function update(Request $request)
    {
      
        // Validate the form data
        $request->validate([
        'hobbies' => 'required|string',
        'smoking' => 'required|in:0,1',
        'introvert' => 'required|in:0,1',
        'food_separated' => 'required|in:0,1',
        'cleaning' => 'required|string',
        'religion' => 'required|string',
        'wifi' => 'required|in:0,1',
        'visiting_family_times' => 'required|string',
        'category' =>'required',
        'age' => 'required',
        'move_in' => 'required'
        ]);

        // Update or create the user's interests
        Interest::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->only(['hobbies', 'smoking', 'introvert', 'food_separated', 'cleaning', 'religion', 'wifi', 'visiting_family_times'])
        );

        // Update user's fields
        $user = auth()->user();
        $user->update([
            'category' => $request->input('category'),
            'gender' => $request->input('gender'),
        ]);

        
        auth()->user()->post()->update([
            'city_id' => $request->input('city_id'),
            'move_in' => $request->input('move_in'),
            'budget' => $request->input('budget'),
            'description' => $request->input('bio'), 
        ]);




        return redirect()->route('app.index')->with('success', 'Interests updated successfully');
    }
}
