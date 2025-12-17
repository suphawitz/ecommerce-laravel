<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // <-- 1. อย่าลืมเพิ่มบรรทัดนี้ที่ด้านบนสุด

class CartController extends Controller
{
    public function add(Request $request) // <-- 2. รับ Request object
    {
        // Logic to add product to cart
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Here you would typically add the product to the user's cart in the database or session

        return redirect('/')->with('success', 'Product added to cart!');
    }
}
