import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js', 
                'resources/js/Clogin.js', 
                'resources/js/Csignup.js',
                'resources/js/Csignup2.js',
                'resources/js/Shelf.js',
                'resources/js/Cheader.js',],
            refresh: true,
        }),
    ],
});
