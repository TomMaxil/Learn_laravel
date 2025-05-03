<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myStudent(){
        return "I`m From Student Controller";
    }

    public function about(){
        return view('about');
    }
}
