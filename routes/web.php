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

Route::get('/ban', [App\Http\Controllers\MainController::class, 'ban'])->name('ban');

Route::group(['middleware' => 'ban'], function () {
    Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('blog');
    Route::get('/vpn', [App\Http\Controllers\MainController::class, 'vpn'])->name('vpn');
    Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create')->middleware('plans');
    Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
    Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware("auth")->group(function (){
    Route::get('/plans', [App\Http\Controllers\PlanController::class, 'index'])->name("plans");;
    Route::get('/plans/{plan}', [App\Http\Controllers\PlanController::class, 'show'])->name("plans.show");
    Route::post('/subscription', [App\Http\Controllers\PlanController::class, 'subscription'])->name("subscription.create");

});
