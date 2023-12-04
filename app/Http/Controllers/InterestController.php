<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index(){
        $interests = Interest::where('user_id', auth()->id())->first();
        return view('users.interest', compact('interests'));
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
        ]);

        // Update or create the user's interests
        Interest::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->only(['hobbies', 'smoking', 'introvert', 'food_separated', 'cleaning', 'religion', 'wifi', 'visiting_family_times'])
        );

        return redirect()->route('app.index')->with('success', 'Interests updated successfully');
    }
}
