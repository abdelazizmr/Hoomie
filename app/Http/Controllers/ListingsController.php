<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Post;
use App\Models\User;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ListingsController extends Controller
{
    public function index(){
        // $posts = Post::all();

        $posts = Post::paginate(10);
        $citys = City::all();
        $authUser = Auth::user();


        // Calculate matching percentage for each post
        if ($authUser) {
            foreach ($posts as $post) {
        
                
                $user_id = auth()->user()->id;
                $matchingPercentage = $this->calculateMatchingPercentage($user_id, $post->user->id);
                if($matchingPercentage){
                    $post->matchingPercentage = $matchingPercentage;
                }
                
            }
        }

        return view('listing', compact('posts', 'citys'));

    }













    public function filter(Request $request)
    {
        $cityName = $request->city;
        $gender=$request->gender;
        $category=$request->category;
        $budgetMin=$request->budgetMin;
        $budgetMax=$request->budgetMax;
        $citys = City::all();
       

        $query = Post::query();

        if (!empty($cityName)) {
            $query->join('cities', 'posts.city_id', '=', 'cities.id')
                ->where('cities.name', '=', $cityName);
        }
        if (!empty($gender)) {
            $query->join('users as gender_user', 'posts.user_id', '=', 'gender_user.id')
                ->where('gender_user.gender', '=', $gender);
        }
    
        if (!empty($category)) {
            $query->join('users as category_user', 'posts.user_id', '=', 'category_user.id')
                ->where('category_user.category', '=', $category);
        }
        if (!empty($budgetMin)) {
            $query->where('posts.budget', '>=', $budgetMin);
        }
    
        if (!empty($budgetMax)) {
            $query->where('posts.budget', '<=', $budgetMax);
        }

        $posts = $query->select('posts.*')->paginate(10);

        // Calculate matching percentage for each post
        $authUser = Auth::user();
        if ($authUser) {
            foreach ($posts as $post) {


                $user_id = auth()->user()->id;
                $matchingPercentage = $this->calculateMatchingPercentage($user_id, $post->user->id);
                if ($matchingPercentage) {
                    $post->matchingPercentage = strval($matchingPercentage) . "%";
                }
            }
        }
       
       

       
        return view('listing', compact('posts','citys','cityName','gender','category','budgetMin','budgetMax'));
    }





    public function calculateMatchingPercentage($user_id1, $user_id2)
    {
        $attributes = ['hobbies', 'smoking', 'introvert', 'food_separated', 'cleaning', 'religion', 'wifi', 'visiting_family_times'];

        $matchingScore = 0;

        // Retrieve users with their interests
        $user1 = User::with('interests')->find($user_id1);
        $user2 = User::with('interests')->find($user_id2);

        // Access users' interests
        $userInterests1 = $user1->interests;
        $userInterests2 = $user2->interests;

        // Ensure both users have interests
        if ($userInterests1 && $userInterests2) {
            // Loop through attributes and calculate matching score
            foreach ($attributes as $attribute) {
                $value1 = $userInterests1->{$attribute};
                $value2 = $userInterests2->{$attribute};

                // Compare values and update matching score
                if ($value1 === $value2) {
                    $matchingScore++;
                }
            }

            // Calculate matching percentage
            $totalAttributes = count($attributes);
            $matchingPercentage = ($matchingScore / $totalAttributes) * 100;

            // You can now use $matchingPercentage as needed (e.g., display it, store it in the database, etc.)
            return $matchingPercentage;
        }
    }

}




