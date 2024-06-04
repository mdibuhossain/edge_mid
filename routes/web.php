<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/new', [PostController::class, 'create'])->name('posts.new');
Route::post('/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/{id}', [PostController::class, 'detail']);
Route::post('/post/{id}', [PostController::class, 'addComment']);
