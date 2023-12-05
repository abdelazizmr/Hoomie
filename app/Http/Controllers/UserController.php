<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user=Auth::user();
        // Récupérer les intérêts de l'utilisateur actuellement authentifié
        $interests = auth()->user()->interests;
          // Charger la vue et passer les intérêts comme données
        return view('users.index' , compact('interests','user'));
    }

    public function editInterest()
    {
        // Récupérer les intérêts de l'utilisateur actuellement authentifié
        $interests = Auth::user()->interests;

        // Charger la vue du formulaire de modification
        return view('users.interestEdit', compact('interests'));
    }
    public function updateInterest(Request $request)
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

        return redirect()->route('users.index')->with('success', 'Interests updated successfully');
    }

}
