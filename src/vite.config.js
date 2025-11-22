import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite'; // ไม่ใช่เพราะต้องการใช้ tialwindcss v3

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        // tailwindcss(), // ไม่ใช่เพราะต้องการใช้ tialwindcss v3
    ],
});
