<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LogController;

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
Route::get('/mylogs',[PostController::class,'mylogs']);
Route::get('/mylogs',[LogController::class,'index']);
Route::get('/modal',[PostController::class, 'modal']);
Route::get('/makemyrecipe',[CategoryController::class,'index']);
Route::post('/makemyrecipe',[PostController::class,'storeRecipe']);
Route::post('/category', [CategoryController::class, 'store']);