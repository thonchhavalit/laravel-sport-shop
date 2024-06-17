import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/css/bootstrap.css', 
                     'resources/css/responsive.css', 
                    'resources/css/style.css', 
                    'resources/css/style.css.map', 
                    'resources/css/style.scss', 
                    'resources/js/app.js',
                    'resources/js/bootstrap.js',
                    'resources/js/cutom.js',
                    'resources/js/jquery-3.4.1.min.js'
                ],
            refresh: true,
        }),
    ],
});
