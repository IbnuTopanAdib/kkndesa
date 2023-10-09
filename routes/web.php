<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Events\Routing;
use App\Models\Post;

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
Route::get('/admin',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Geografis Desa',
    ]);
});
Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::post('/send', [HomeController::class, 'send'])->name('send.mail');


Route::get('/home#contact',[HomeController::class, 'index']);

Route::get('/home#about', [HomeController::class, 'index']);

Route::resource('/post', PostDashboardController::class)->middleware('auth');
Route::resource('/faq', ContactController::class)->middleware('auth');

Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/blog', [PostController::class,'index']);

Route::get('/blog/{posts:slug}',[PostController::class,'show'] );