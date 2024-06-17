const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
       'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
       'node_modules/font-awesome/css/font-awesome.min.css',
       'resources/css/bootstrap.css',
       'resources/css/style.css',
       'resources/css/responsive.css'
   ], 'public/css/all.css');
