<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
    return view('home', [
        'title' => 'Home',
        'active' => 'Home'
    ]);
});

// Blog
Route::get('/Blog', [BlogController::class, 'index']);
Route::get('/Blog/{post:slug}',[BlogController::class, 'detail']);
// category
Route::get('/Category',[CategoryController::class, 'index']);
Route::get('/Category/{category:slug}',[CategoryController::class, 'Category']);
// User
Route::get('/Authors', [UserController::class, 'index']);
Route::get('/Authors/{author:username}', [UserController::class, 'userPost']);
