const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
 mix.js('resources/js/app.js', 'public/js').vue().version();

 mix.styles([
     'public/css/bootstrap.min.css',
     'public/css/app.css',
     'public/css/carousel.css',
     'public/css/common.css',
     'public/css/responsive.css',
     'public/css/main.css',
 ], 'public/css/all.css').version();
