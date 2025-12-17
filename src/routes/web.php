<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']); 
Route::post('/cart', [CartController::class, 'add']); 

Route::get('/test', function () {
    return view('test');
});
