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

Route::get('/order/edit',[\App\Http\Controllers\OrderController::class,'edit'])->name('order.edit');
Route::patch('/order',[\App\Http\Controllers\OrderController::class,'update'])->name('order.update');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('meal/', [\App\Http\Controllers\OrderMealController::class, 'index'])->name('meal');
Route::post('meal/',[\App\Http\Controllers\OrderMealController::class,'store'])->name('meal.store');
Route::get('meal/create',[\App\Http\Controllers\OrderMealController::class,'create'])->name('meal.create');
Route::get('meal/edit',[\App\Http\Controllers\OrderMealController::class,'edit'])->name('meal.edit');
Route::patch('meal',[\App\Http\Controllers\OrderMealController::class,'update'])->name('meal.update');
Route::delete('meal/{id}',[\App\Http\Controllers\OrderMealController::class,'destroy'])->name('meal.destroy');


Route::get('/myprofile', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
