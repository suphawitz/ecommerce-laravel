<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // <-- 1. เพิ่มบรรทัดนี้ที่ด้านบน

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']); // <-- 2. แก้ไข Route หน้าแรก

Route::get('/test', function () {
    return view('test');
});
