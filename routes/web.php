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

Route::get('/', 'App\Http\Controllers\MainController@blog')->name('blog');
Route::get('/reviewonepost/{id}', 'App\Http\Controllers\MainController@reviewonepost')->name('reviewonepost');
Route::get('/admin', 'App\Http\Controllers\MainController@admin')->name('admin');
Route::get('/deletepost/{id}', 'App\Http\Controllers\MainController@deletepost')->name('deletepost');
Route::get('/register', 'App\Http\Controllers\MainController@register')->name('register');
Route::get('/login', 'App\Http\Controllers\MainController@login')->name('login');
Route::get('/exit', 'App\Http\Controllers\MainController@exit')->name('exit');
Route::get('/createpost', 'App\Http\Controllers\MainController@createpost')->name('createpost');

Route::post('/addcomment', 'App\Http\Controllers\MainController@addcomment')->name('addcomment');;
Route::post('/addpost', 'App\Http\Controllers\MainController@addpost')->name('addpost');
Route::post('/updatepost', 'App\Http\Controllers\MainController@updatepost')->name('updatepost');
Route::post('/auth', 'App\Http\Controllers\MainController@auth')->name('auth');
Route::post('/registeracc', 'App\Http\Controllers\MainController@registeracc')->name('registeracc');


