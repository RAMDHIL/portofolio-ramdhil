import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0',     // agar bisa diakses dari jaringan
        port: 5173,          // pastikan port ini terbuka
        hmr: {
        host: '192.168.1.4' // ganti dengan IP lokal laptop kamu
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    
});
