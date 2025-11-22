<!-- ✅ posts.html -->
<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>โพสต์ทั้งหมด - Blog System</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-slate-50 min-h-screen font-sans">
    <nav class="bg-white border-b shadow-sm sticky top-0 z-10">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">MyBlog</h1>
            <a href="create.html"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition">สร้างโพสต์</a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-10">
        <h2 class="text-2xl font-semibold mb-6">โพสต์ทั้งหมด</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- ตัวอย่างโพสต์ -->
            <article class="bg-white rounded-2xl shadow hover:shadow-lg transition p-5 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-semibold mb-2">วิธีเริ่มต้นวันใหม่อย่างมีพลัง</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">เริ่มต้นวันใหม่ด้วยการวางแผนสิ่งเล็ก ๆ
                        ที่ทำให้คุณยิ้มได้ เช่น การชงกาแฟและเปิดเพลงที่ชอบ...</p>
                </div>
                <div class="flex justify-between items-center text-sm text-slate-500">
                    <span>12 พ.ย. 2025</span>
                    <div class="space-x-2">
                        <a href="edit.html" class="text-yellow-600 hover:text-yellow-700">แก้ไข</a>
                        <button class="text-red-600 hover:text-red-700">ลบ</button>
                    </div>
                </div>
            </article>

            <article class="bg-white rounded-2xl shadow hover:shadow-lg transition p-5 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-semibold mb-2">เทคนิคการโฟกัสในการเรียน</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">ลองใช้เทคนิค Pomodoro และพักเบรกทุก 25 นาที
                        เพื่อให้สมองมีเวลาพัก...</p>
                </div>
                <div class="flex justify-between items-center text-sm text-slate-500">
                    <span>11 พ.ย. 2025</span>
                    <div class="space-x-2">
                        <a href="edit.html" class="text-yellow-600 hover:text-yellow-700">แก้ไข</a>
                        <button class="text-red-600 hover:text-red-700">ลบ</button>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>

</html>


<!-- ✅ create.html -->
<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>สร้างโพสต์ใหม่ - Blog System</title>

</head>

<body class="bg-slate-50 min-h-screen font-sans">
    <nav class="bg-white border-b shadow-sm sticky top-0 z-10">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">MyBlog</h1>
            <a href="posts.html" class="text-slate-600 hover:text-indigo-600 transition">ย้อนกลับ</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-10">
        <h2 class="text-2xl font-semibold mb-6">สร้างโพสต์ใหม่</h2>

        <form class="bg-white rounded-2xl shadow p-6 space-y-5">
            <div>
                <label class="block text-sm font-medium mb-2">หัวข้อ</label>
                <input type="text" placeholder="พิมพ์หัวข้อของโพสต์"
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-200 outline-none" />
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">เนื้อหา</label>
                <textarea rows="8" placeholder="เขียนเนื้อหาที่นี่..."
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-200 outline-none"></textarea>
            </div>

            <div class="flex justify-end gap-3">
                <a href="posts.html"
                    class="px-4 py-2 border rounded-lg text-slate-600 hover:bg-slate-100 transition">ยกเลิก</a>
                <button type="submit"
                    class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">บันทึกโพสต์</button>
            </div>
        </form>
    </main>
</body>

</html>


<!-- ✅ edit.html -->
<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>แก้ไขโพสต์ - Blog System</title>

</head>

<body class="bg-slate-50 min-h-screen font-sans">
    <nav class="bg-white border-b shadow-sm sticky top-0 z-10">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">MyBlog</h1>
            <a href="posts.html" class="text-slate-600 hover:text-indigo-600 transition">ย้อนกลับ</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-10">
        <h2 class="text-2xl font-semibold mb-6">แก้ไขโพสต์</h2>

        <form class="bg-white rounded-2xl shadow p-6 space-y-5">
            <div>
                <label class="block text-sm font-medium mb-2">หัวข้อ</label>
                <input type="text" value="วิธีเริ่มต้นวันใหม่อย่างมีพลัง"
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-200 outline-none" />
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">เนื้อหา</label>
                <textarea rows="8"
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-200 outline-none">เริ่มต้นวันใหม่ด้วยการวางแผนสิ่งเล็ก ๆ ที่ทำให้คุณยิ้มได้ เช่น การชงกาแฟและเปิดเพลงที่ชอบ...</textarea>
            </div>

            <div class="flex justify-end gap-3">
                <a href="posts.html"
                    class="px-4 py-2 border rounded-lg text-slate-600 hover:bg-slate-100 transition">ยกเลิก</a>
                <button type="submit"
                    class="px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">อัปเดตโพสต์</button>
            </div>
        </form>
    </main>
</body>

</html>
