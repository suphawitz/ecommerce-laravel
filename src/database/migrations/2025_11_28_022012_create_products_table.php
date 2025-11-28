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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // ชื่อสินค้า
            $table->text('description')->nullable(); // รายละเอียด (อนุญาตให้ว่างได้)
            $table->decimal('price', 8, 2); // ราคา (ทศนิยม 8 หลัก, หลังจุด 2 หลัก)
            $table->integer('stock')->default(0); // จำนวนในคลัง (ค่าเริ่มต้นเป็น 0)
            $table->string('image_path')->nullable(); // ที่อยู่ของรูปภาพ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
