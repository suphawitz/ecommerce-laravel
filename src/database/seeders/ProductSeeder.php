<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product; // ต้องใช้ Model Product

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. สร้าง Product ตัวแรก (ตัวอย่าง)
        Product::create([
            'name' => 'เสื้อยืดโค้ดดิ้งสุดคูล',
            'description' => 'เสื้อยืดผ้าคอตตอน 100% สกรีนโลโก้ Artisan',
            'price' => 599.00,
            'stock' => 50,
        ]);

        // 2. สร้าง Product ตัวที่สอง (ตัวอย่าง)
        Product::create([
            'name' => 'แก้วมัค Artisan',
            'description' => 'แก้วมัคเซรามิกสีขาว สกรีนโลโก้ Artisan',
            'price' => 299.00,
            'stock' => 100,
        ]); 

        // 3. สร้าง Product ตัวที่สาม (ตัวอย่าง)
        Product::create([
            'name' => 'สมุดโน้ต Artisan',
            'description' => 'สมุดโน้ตปกแข็ง ขนาด A5 มีโลโก้ Artisan บนปก',
            'price' => 199.00,
            'stock' => 200,
        ]);
    }
}
