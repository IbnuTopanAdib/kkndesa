<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Events\Routing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Profile Desa',
    ]);
});

Route::get('/home#contact', function () {
    return view('index');
});
Route::get('/home#hero', function () {
    return view('index');
});
Route::get('/home#about', function () {
    return view('index');
});

Route::resource('/post', PostDashboardController::class);
Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/admin',[LoginController::class, 'index']);


Route::get('/blog', [PostController::class,'index']);

Route::get('/blog/{posts:slug}',[PostController::class,'show'] );