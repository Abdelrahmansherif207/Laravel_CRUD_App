<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Events\PostAdded;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::middleware('auth')->group(function () {

    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create_post');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit')->where('id', '[0-9]+');
    Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update_post')->where('id', '[0-9]+');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});

Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show_post')->where('id', '[0-9]+');

Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete_post')->where('id', '[0-9]+');

Route::fallback(function () {
    return response('<h1>Page not found</h1>', 404);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
