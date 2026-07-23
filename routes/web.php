<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home']);

Route::get('/login', [PostController::class, 'login']);
Route::get('/register', [PostController::class, 'register']);
Route::get('/welcomeback', [PostController::class, 'welcomeback']);
Route::get('/register2', [PostController::class, 'register2']);
Route::get('/nicetomeetyou', [PostController::class, 'nicetomeetyou']);
Route::get('/myrecipe', [PostController::class, 'myrecipe']);
Route::get('/changepassword', [PostController::class, 'changepassword']);
Route::get('/recipies',[PostController::class,'recipies']);
Route::get('/updaterecipies',[PostController::class,'updaterecipies']);

Route::get('/modal',[PostController::class, 'modal']);