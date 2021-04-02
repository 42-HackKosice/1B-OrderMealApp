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

Route::get('/', [\App\Http\Controllers\WelcomeController::class,'index']);
Auth::routes();

Route::get('/restaurants', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurants');
Route::get('/restaurants/{data}', [\App\Http\Controllers\RestaurantController::class, 'show'])->name('restaurants.show');
//
//
Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

