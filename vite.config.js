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
                'resources/js/Cheader.js',
                'resources/js/homepage.js',
                'resources/js/reservation.js',
                'resources/js/specific-category.js',
                'resources/js/book-details.js',
                'resources/js/reservation-details.js',
                'resources/js/about-us.js',
                'resources/js/shelf.js',
                'resources/js/profile.js',],
            refresh: true,
        }),
    ],
});


