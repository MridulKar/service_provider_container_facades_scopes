<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/post-active', [PostController::class, 'active_posts'])->name('active.posts');
route::get('/post-inactive', [PostController::class, 'inactive_posts'])->name('inactive.posts');
route::get('/all-users', [PostController::class, 'users'])->name('users');

