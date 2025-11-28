<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// เพิ่มคำสั่งนี้ไว้ด้านบนสุดเพื่อให้เรียกใช้ Model ได้ง่ายขึ้น
use App\Models\User;
use App\Models\OrderItem;

class Order extends Model
{
    // Order Belong To User (ใครสั่ง?)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // Order Has Many OrderItems (ในบิลมีอะไรบ้าง?)
    public function orderItems() // <-- แก้ไขเป็นรูปพหูพจน์ (Plural)
    {
        return $this->hasMany(OrderItem::class);
    }
}
