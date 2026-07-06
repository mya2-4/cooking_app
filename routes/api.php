<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/',function() {
  return view('posts.index',compact('post'));
});
Route::get('/home',[PostController::class,'home']);
Route::get('/login',[PostController::class,'login']);