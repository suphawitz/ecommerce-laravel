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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            // 1. Foreign Key: เชื่อมไปหาตาราง orders
            $table->foreignId('order_id')->constrained();
    
            // 2. Foreign Key: เชื่อมไปหาตาราง products
            $table->foreignId('product_id')->constrained();

            // 3. ข้อมูลรายการสินค้า
            $table->integer('quantity');
            $table->decimal('price', 10, 2); // ราคาต่อชิ้น ณ วันที่ซื้อ

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
