<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// เพิ่มคำสั่งนี้ไว้ด้านบนสุดเพื่อให้เรียกใช้ Model ได้ง่ายขึ้น
use App\Models\Product;
use App\Models\Order;

class OrderItem extends Model
{
    // เชื่อมความสัมพันธ์กับตาราง products โดย belongsTo() เพราะว่า OrderItem เป็นลูกของ Product
    public function product() // <-- ใช้ชื่อฟังก์ชันเป็นเอกพจน์ (product)
    {
        return $this->belongsTo(Product::class);
    }

    // เชื่อมความสัมพันธ์กับตาราง orders
    public function order() 
    {
        return $this->belongsTo(Order::class);
    }
}