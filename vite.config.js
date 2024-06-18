import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/menu.css',
                'resources/css/contact.css',
                'resources/css/home.css',
                'resources/js/menu.js',
                'resources/js/contact.js',
                 'resources/js/home.js'
            ],
            refresh: true,
        }),
    ],
});
