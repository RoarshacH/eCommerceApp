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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'public/css/vendor/nouislider.min.css',
    'public/css/vendor/slick.css',
    'public/css/vendor/slick-theme.css',
    'public/css/vendor/style.css'
], 'public/css/all.css');

mix.scripts([
    'public/js/vendor/jquery.zoom.min.js',
    'public/js/vendor/nouislider.min.js',
    'public/js/vendor/slick.min.js',
    'public/js/vendor/main.js'
], 'public/js/all.js');

// 'public/js/vendor/bootstrap.min.js',
// 'public/js/vendor/jquery.min.js',

