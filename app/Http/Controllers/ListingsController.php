<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('listing', compact('posts'));

    }



}
