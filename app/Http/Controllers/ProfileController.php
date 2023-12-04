<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public $user_id;
    public function userProfile()
    {
        $user=Auth::user();
        return view('dashboard.profile',compact('user'));
    }
    public function profileSecurity()
    {
        $user=Auth::user();
        return view('dashboard.security',compact('user'));
    }
   /* public function update(Request $request,$id)
    {
        $request->validate([
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image_name=time().'.'.$request->image->extension();
        $request->image->move(public_path('users'),$image_name);
        $path="/users/".$image_name;
        $user =User::where('id',$id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->gender=$request->gender;
        $user->address=$request->address;
        $user->age=$request->age;
        $user->image=$path;
        $user->save();
        return redirect()->route('dashboard.profile')->with('Success','Profile successfuly updated');
    }*/

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::findOrFail($id);

        // Vérifier si une nouvelle image est fournie
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Traiter l'image
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('users'), $image_name);
            $path = "/users/" . $image_name;

            // Mettre à jour les détails de l'utilisateur avec la nouvelle image
            $user->image = $path;
        }

        // Mettre à jour les autres détails de l'utilisateur
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->age = $request->age;
        $user->save();

        return redirect()->route('dashboard.profile')->with('Success', 'Profile successfuly updated');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::getSingle(auth()->id());

        if (!$user || !Hash::check($request->current_password, $user->password)) {
            return view('dashboard.security')->withErrors(['current password' => 'The provided password is incorrect.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->route('dashboard.security')
            ->with('success', 'Password successfully updated');
    }

    public function deleteAccount(User $user)
    {
        $user->delete();
        session()->flash('message', 'Account has been deleted successfully!');
        return redirect()->route('app.index'); // Redirect to the dashboard or another appropriate page
    }

    public function updatePrivacy(Request $request)
    {
        $request->validate([
            'privacy' => 'required|in:public,private',
        ]);

        $user = User::find(auth()->id());
        $user->privacy = $request->input('privacy');
        $user->save();

        return redirect()->route('dashboard.security')->with('success', 'Privacy settings updated successfully');
    }
}
