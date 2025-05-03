<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function(){
    return view('about');
});

Route::view('/contact', 'contact');

Route::get('/user', function(){
    echo 'Hello I`m From User';
});

Route::get('/student/{stdName}', function($stdName){
 return "This is a Student : ".$stdName;
});

Route::get('add/{value1}/{value2}', function($v1,$v2){
 return $v1 * $v2;
});
