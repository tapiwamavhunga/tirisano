<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('profile',[UserController::class,'profile'])->name('profile');
  Route::post('profile/{user}',[UserController::class,'updateprofile'])->name('profile.update');

      Route::resource('orders', App\Http\Controllers\OrderController::class, []);
  Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');

});
      Route::resource('orders', App\Http\Controllers\OrderController::class, []);


Route::get('user/profile/create-step-one', 'App\Http\Controllers\UserController@createStepOne')->name('profile.create.step.one.post');


require 'admin.php';