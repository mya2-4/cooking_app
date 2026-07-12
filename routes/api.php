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
Route::get('/register',[PostController::class,'register']);
Route::get('/welcomeback',[PostController::class,'welcomeback']);
Route::get('/register2',[PostController::class,'register2']);
Route::get('/nicetomeetyou',[PostController::class,'nicetomeetyou']);
Route::get('/myrecipe',[PostController::class,'myrecipe']);