<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.auth.login');
    Route::post('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
    Route::post('logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.auth.logout');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\MainController::class, 'admin'])->name('admin');

        Route::get('/users', [App\Http\Controllers\AdminController\UserController::class, 'index'])->name('admin.users.index');
        Route::delete('/users/{id}', [App\Http\Controllers\AdminController\UserController::class, 'destroy'])->name('admin.users.destroy');
        Route::post('/users/{id}/login', [App\Http\Controllers\AdminController\UserController::class, 'login'])->name('admin.users.login');


        Route::get('/posts', [App\Http\Controllers\AdminController\PostController::class, 'index'])->name('admin.posts.index');
        Route::get('/posts/{id}/edit', [App\Http\Controllers\AdminController\PostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/posts/{id}', [App\Http\Controllers\AdminController\PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/posts/{id}', [App\Http\Controllers\AdminController\PostController::class, 'destroy'])->name('admin.posts.destroy');


        Route::get('/comments', [App\Http\Controllers\AdminController\CommentController::class, 'index'])->name('admin.comments.index');

        Route::delete('/comments/{id}', [App\Http\Controllers\AdminController\CommentController::class, 'destroy'])->name('admin.comments.destroy');
    });
});
