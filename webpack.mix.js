const mix = require('laravel-mix');

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

mix
    .styles('resources/views/assets/bootstrap/css/bootstrap.css', 'public/assets/css/bootstrap.min.css')
    .styles('resources/views/assets/style.css', 'public/assets/css/style.css')
    .styles('resources/views/assets/owl-carousel/owl.carousel.css', 'public/assets/css/owl.carousel.css')
    .styles('resources/views/assets/owl-carousel/owl.theme.css', 'public/assets/css/owl.theme.css')
    .styles('resources/views/assets/slitslider/css/style.css', 'public/assets/css/slitslider/css/style.css')
    .styles('resources/views/assets/slitslider/css/custom.css', 'public/assets/css/custom.css')
 
    .scripts('resources/views/assets//bootstrap/js/bootstrap.js', 'public/assets/js/bootstrap.js')
    .scripts('resources/views/assets/script.js', 'public/assets/js/script.js')
    .scripts('resources/views/assets/owl-carousel/owl.carousel.js', 'public/assets/js/owl.carousel.js')
    .scripts('resources/views/assets/slitslider/js/modernizr.custom.79639.js', 'public/assets/js/modernizr.custom.79639.js')
    .scripts('resources/views/assets/slitslider/js/jquery.ba-cond.min.js', 'public/assets/js/jquery.ba-cond.min.js')
    .scripts('resources/views/assets/slitslider/js/jquery.slitslider.js', 'public/assets/js/jquery.slitslider.js')

    .copyDirectory('resources/views/assets/img', 'public/assets/img')

    .version();
