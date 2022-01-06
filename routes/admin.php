<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WriterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Writer\PostController as WriterPostController;

Route::group(['middleware' => ['isAdmin', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', DashboardController::class)->name('index');

    // Users
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
    });

    // Writers
    Route::group(['prefix' => 'writers', 'as' => 'writers.'], function () {
        Route::get('/', [WriterController::class, 'index'])->name('index');
    });

    // Posts
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/writer', WriterPostController::class)->name('writer');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/', [PostController::class, 'store'])->name('store');
        Route::get('{post}/edit', [PostController::class, 'edit'])->name('edit');
        Route::post('{post}', [PostController::class, 'update'])->name('update');
        Route::delete('{post}', [PostController::class, 'destroy'])->name('destroy');
    });

    // Tags
    Route::resource('tags', TagController::class);
});
