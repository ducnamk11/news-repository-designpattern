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

Auth::routes();

//Route::get('/{id}/{slug}', 'HomeController@show')->name('post.detail');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{id}', 'HomeController@show')->name('post.detail');
Route::get('/search', 'PostController@search')->name('post.search');

Route::prefix('admin')->group(function () {
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
    Route::resource('post', 'PostController');
});


