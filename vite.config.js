import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

/**
 * Vite configuration for the personal website clone. This file registers the
 * Laravel Vite plugin and the Vue plugin so that Inertia Vue pages are
 * compiled correctly. The input array instructs Vite to compile both the
 * Tailwind CSS file and the main JavaScript entry point.
 */
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
});