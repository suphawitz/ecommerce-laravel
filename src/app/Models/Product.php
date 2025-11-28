<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// เพิ่มคำสั่งนี้ไว้ด้านบนสุดเพื่อให้เรียกใช้ Model ได้ง่ายขึ้น
use App\Models\OrderItem;

class Product extends Model
{
    // เมธอดนี้จะทำให้เราสามารถเรียกดูรายการสินค้าที่ถูกสั่งซื้อ (Order Items) ทั้งหมดที่เกี่ยวข้องกับสินค้านั้นๆ ได้ง่ายๆ ด้วยคำสั่ง $product->orderItems
    public function orderItems()
    {
        // One Product has Many OrderItems
        return $this->hasMany(OrderItem::class);
    }
}
