<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ApiController::class, 'products']);
Route::get('/categories', [ApiController::class, 'categories']);
Route::get('/users', [ApiController::class, 'users']);
