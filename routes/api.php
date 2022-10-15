<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public Routes

// Home
Route::controller(HomeController::class)->group(function (){
    Route::get('/home-slider','homeslider')->name('homeslider');
    Route::get('/home-about','homeabout')->name('homeabout');
    Route::get('/home-service','homeservice')->name('homeservice');
    Route::get('/home-features','homefeatures')->name('homefeatures');
    Route::get('/home-testimonials','hometestimonials')->name('hometestimonials');
});
// About
Route::controller(AboutController::class)->group(function (){
    Route::get('/about','about')->name('about');
    Route::get('/about-service','aboutservice')->name('aboutservice');
    Route::get('/about-team','aboutteam')->name('aboutteam');
});
// Services
Route::get('/services',[ServiceController::class, 'service'])->name('service');
//Route::get('/',[ContactController::class, 'contact'])->name('contact');

// Login
//Route::post('/register',[AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


// Private Routes
Route::group(["middleware" => "auth:sanctum"], function () {
    // User
    Route::controller(UserController::class)->group(function (){
        Route::get('/users','index')->name('user.index');
        Route::put('/users/{id}','update')->name('user.update');
    });
});
