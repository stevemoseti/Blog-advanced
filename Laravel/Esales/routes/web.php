<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('categories', App\Http\Controllers\categoriesController::class);
Route::resource('brands', App\Http\Controllers\BrandsController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);

Route::middleware(['auth','admin'])->group(function(){
Route::get('users','App\Http\Controllers\UsersController@index')->name('users.index'); 
Route::post('users/{user}/make-admin','App\Http\Controllers\UsersController@makeAdmin')->name('users.make-admin');
Route::get('users/profile', 'App\Http\Controllers\UsersController@edit')->name('users.edit-profile');
Route::put('users/profile','App\Http\Controllers\UsersController@update')->name('users.update-profile');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
