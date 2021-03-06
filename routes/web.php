<?php

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
Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {
        Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('/users', 'AdminController@users')->name('admin.users');
    });
});


