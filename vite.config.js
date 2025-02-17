import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/skeleton.css',
                'resources/css/home.css',
                'resources/js/homepageimages.js',
                "resources/css/faq.css",
                'resources/css/dashboard.css',
                'resources/js/schoolyear.js',
                'resources/js/creditcalculator.js'],
            refresh: true,
        }),
    ],
});
