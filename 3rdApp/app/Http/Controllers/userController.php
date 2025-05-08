<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function intro(){
        return 'Hello I`m a Method From Class Controller';
    }

    public function logic(){
        return 2+2;
    }

    public function about(){
        return view('about');
    }

    public function test(){
        $role = "admin";
        if($role == "admin"){
           return 'Welcome Admin';
        }else{
            return 'Welcome User';
        }
    }

    public function username(string $name){
      return 'Welcome'. $name;
    }

    public function learning(){
        return view('syntax');
    }

    public function mystudents(){
        $students = ["Bilal","Ahmad Umar","Talha","Huzaifa"];
        return view('batch', ['stds' => $students]);
    }
}
