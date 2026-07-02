<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

Route::get('/',[PostController::class,'index']);