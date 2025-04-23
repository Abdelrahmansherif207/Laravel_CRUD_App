<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create_post');

Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show_post')->where('id', '[0-9]+');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit')->where('id', '[0-9]+');

Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update_post')->where('id', '[0-9]+');

Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete_post')->where('id', '[0-9]+');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::fallback(function () {
    return response('<h1>Page not found</h1>', 404);
});

