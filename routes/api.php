<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// APIを使うときだけ残す
// Route::get('/posts', [PostController::class, 'index']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/post/{id}', [PostController::class, 'show']);