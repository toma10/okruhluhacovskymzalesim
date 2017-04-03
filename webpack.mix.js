const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/home.js', 'public/js')
   .sass('resources/assets/sass/app.sass', 'public/css')
   .copy('node_modules/normalize-css/normalize.css', 'public/css/vendor')
   .copy('node_modules/video.js/dist/video-js.css', 'public/css/vendor')
   .copy('node_modules/dropzone/dist/dropzone.css', 'public/css/vendor')
   .copy('node_modules/lightbox2/dist/css/lightbox.css', 'public/css/vendor')
   .styles([
        'public/css/vendor/normalize.css',
        'public/css/vendor/video-js.css',
    ], 'public/css/vendor.css')
   .styles([
        'public/css/vendor/lightbox.css',
        'public/css/vendor/dropzone.css',
    ], 'public/css/gallery-vendor.css')
   .copy('node_modules/jquery/dist/jquery.js', 'public/js/vendor')
   .copy('node_modules/video.js/dist/video.js', 'public/js/vendor')
   .copy('node_modules/dropzone/dist/dropzone.js', 'public/js/vendor')
   .copy('node_modules/bxslider/dist/jquery.bxslider.js', 'public/js/vendor')
   .copy('node_modules/lightbox2/dist/js/lightbox.js', 'public/js/vendor')
   .scripts([
        'public/js/vendor/jquery.js',
        'public/js/vendor/jquery.bxslider.js',
        'public/js/vendor/video.js',
    ], 'public/js/vendor.js')
   .scripts([
        'public/js/vendor/lightbox.js',
        'public/js/vendor/dropzone.js',
    ], 'public/js/gallery-vendor.js');
