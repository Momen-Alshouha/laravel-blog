import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/adminCss/bootstrap.min.css',
                'resources/css/adminCss/style.css',
            ],
            refresh: true,
        }),
    ],
});
