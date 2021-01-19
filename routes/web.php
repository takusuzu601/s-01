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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','App\Http\Controllers\TestController@index');

 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin')->group(function(){
    Auth::routes();

    Route::get('/home', 'AdminHomeController@index')->name('admin_home');
});

Route::namespace('App\Http\Controllers\Oner')->prefix('oner')->name('oner')->group(function(){
    Auth::routes();

    Route::get('/home', 'OnerHomeController@index')->name('oner_home');
});

// Route::prefix('admin')->namespace('Admin')->name('admin')->group(function(){
//     Auth::routes();
// });
// Route::prefix('oner')->namespace('Oner')->name('admin')->group(function(){
//     Auth::routes();
// });

// /////////////////////////////////////////////////////
