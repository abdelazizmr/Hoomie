<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index');
    }
}
