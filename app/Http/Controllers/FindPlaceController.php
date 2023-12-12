<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FindPlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = User::find(auth()->id());
        $places = Place::all();
        if ($user) {
            return view('findPlace', compact('user','places'));
        } else {
            // Handle the case when the user is not found, you might redirect or display an error message
            return redirect()->route('login')->with('error', 'User not found');
        }
    }


        public function store(Request $request)
        {
            $request->validate([
                'description' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'video'=>'file|mimes:mp4,avi,mov,wmv|max:51200',
            ]);

        // Vérifier si un fichier est fourni

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                // Traiter l'image
                $image_name = time() . '.' . $request->image->extension();
                $request->image->move(public_path('media'), $image_name);
                $path = "/media/" . $image_name;

                 // Créer une nouvelle place avec l'image ou la vidéo
                Place::create([
                    'user_id' => auth()->id(),
                    'description' => $request->description,
                    'image' => $path,
                ]);
            } elseif ($request->hasFile('video')) {
                // Traitement de la vidéo
                $request->validate([
                    'video' => 'file|mimes:mp4,avi,mov,wmv|max:51200', // 50 MB maximum
                ]);

                $video_name = time() . '.' . $request->video->extension();
                $request->video->move(public_path('media'), $video_name);
                $path = "/media/" . $video_name;

                 // Créer une nouvelle place avec l'image ou la vidéo
                Place::create([
                    'user_id' => auth()->id(),
                    'description' => $request->description,
                    'video' => $path,
                ]);
            }


        return redirect()->route('app.findplace');
    }
    public function edit($id)
    {
        $place = Place::findOrFail($id);

        // Check if the authenticated user is the owner of the place
        if (auth()->id() != $place->user_id) {
            // Handle the case where the user doesn't have permission (e.g., redirect or show an error message)
            return redirect()->route('app.findplace')->with('error', 'You do not have permission to edit this place.');
        }

        return view('editPlace', compact('place'));
    }
    public function destroy($id)
    {
        $place = Place::findOrFail($id);

        // Add additional logic to check if the authenticated user has permission to delete this place
        // ...

        $place->delete();

        return redirect()->route('app.findplace')->with('success', 'Place deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'file|mimes:mp4,avi,mov,wmv|max:51200',
        ]);

        $place = Place::findOrFail($id);
        $this->authorize('update', $place);

        // Check if the authenticated user has permission to edit this place
        if (!auth()->user()->can('update', $place)) {
            // You may want to customize this response based on your application's needs
            abort(403, 'Unauthorized action.');
        }

        // Update the place details
        $place->description = $request->description;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Process and update the image
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('media'), $image_name);
            $place->image = "/media/" . $image_name;
        }

        if ($request->hasFile('video')) {
            $request->validate([
                'video' => 'file|mimes:mp4,avi,mov,wmv|max:51200',
            ]);

            // Process and update the video
            $video_name = time() . '.' . $request->video->extension();
            $request->video->move(public_path('media'), $video_name);
            $place->video = "/media/" . $video_name;
        }

        $place->save();

        return redirect()->route('app.findplace');
    }


}
