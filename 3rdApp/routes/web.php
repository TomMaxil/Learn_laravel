<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


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

Route::get('/', function(){
    return view('welcome');
});

// Route::view('/about','about');

Route::get('/intro', [userController::class,'intro']);

Route::get('/calculate', [userController::class,'logic']);

Route::get('/about', [userController::class,'about']);

Route::get('/test', [userController::class,'test']);

Route::get('/user/{namee}', [userController::class,'username']);

Route::get('/learning', [userController::class, 'learning']);

Route::get('/batch', [userController::class,'mystudents']);
