<?php 

Route::group(['prefix'  =>  'admin'], function () {

Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    Route::resource('users', App\Http\Controllers\UserController::class, []);
      Route::resource('admin.orders', App\Http\Controllers\OrderController::class, []);


});


Route::middleware(['auth:admin'])->group(function () {
    Route::resource('users', App\Http\Controllers\UserController::class, []);




Route::resource('countries', App\Http\Controllers\CountryController::class, []);

});


});

