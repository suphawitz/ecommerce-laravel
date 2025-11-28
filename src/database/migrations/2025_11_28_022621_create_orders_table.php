<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            // 1. Link ไปหา User (Foreign Key)
            $table->foreignId('user_id')->constrained();
            
            // 2. ข้อมูลการสั่งซื้อ
            $table->decimal('total_price', 10, 2); // ราคารวมของออเดอร์
            $table->string('status')->default('pending'); // สถานะ: pending, paid, shipped, etc.
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
