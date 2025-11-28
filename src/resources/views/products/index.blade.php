<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>

    {{-- เชื่อม Vite/Tailwind --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">
    
    <div class="max-w-7xl mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">สินค้าทั้งหมด</h1>
        
        {{-- โครงสร้าง Grid สำหรับสินค้า --}}
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
            
            {{-- V จุดที่เราจะวนลูปแสดงสินค้า V --}}
            @foreach ($products as $product)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden flex flex-col justify-between">
                
                {{-- 1. ส่วนรูปภาพ (Placeholder) --}}
                <div class="h-40 bg-gray-100 flex items-center justify-center text-gray-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L14 14m0 0l1.586 1.586a2 2 0 002.828 0L20 12m-6 0h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                
                {{-- 2. ส่วนรายละเอียด --}}
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $product->name }}</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 mb-3">{{ Str::limit($product->description, 50) }}</p>
                    
                    {{-- 3. ราคา --}}
                    <div class="mt-auto">
                        <p class="text-2xl font-extrabold text-indigo-600">
                            {{ number_format($product->price, 2) }} ฿
                        </p>
                    </div>
                </div>
                
                {{-- 4. ปุ่ม --}}
                <div class="p-4 pt-0">
                    <a href="#" class="block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 rounded-lg transition duration-150">
                        + ใส่ตะกร้า
                    </a>
                </div>
            </div>
            @endforeach
            {{-- ^ สิ้นสุดวนลูปแสดงสินค้า ^ --}}
        </div>
    </div>
</body>
</html>