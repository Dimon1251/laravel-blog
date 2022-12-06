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

Route::get('/', 'App\Http\Controllers\PostController@index')->name('blog');
Route::get('/vpn', 'App\Http\Controllers\MainController@vpn')->name('vpn');


Route::get('/show/{id}', 'App\Http\Controllers\PostController@show')->name('show');

Route::middleware('auth')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\MainController@admin')->name('admin');
});


Route::get('/deletepost/{id}', 'App\Http\Controllers\PostController@destroy')->name('deletepost');


Route::get('/create', 'App\Http\Controllers\PostController@create')->name('create');

Route::post('/store', 'App\Http\Controllers\CommentController@store')->name('store');

Route::post('/addpost', 'App\Http\Controllers\PostController@store')->name('addpost');
Route::post('/updatepost', 'App\Http\Controllers\PostController@update')->name('updatepost');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
