<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class ListingsController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::paginate(10);
        $citys = City::all();

        return view('listing', compact('posts','citys'));

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
        $posts = $query->select('posts.*')->get();
       
       

       
        return view('listing', compact('posts','citys','cityName','gender','category','budgetMin','budgetMax'));
    }



}