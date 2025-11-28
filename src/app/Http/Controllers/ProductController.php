<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 1. นำเข้า Model ที่นี่:
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // 2. ดึงสินค้าทั้งหมด:
        $products = Product::all();

        // 3. ส่งข้อมูลไป View:
        return view('products.index', compact('products')); // เป็นฟังก์ชันของ PHP ที่สะดวกมากครับ มันจะทำให้ตัวแปร $products ที่เราดึงมาจากฐานข้อมูล สามารถใช้งานได้โดยตรง ภายในไฟล์ index.blade.php ครับ
    }
}