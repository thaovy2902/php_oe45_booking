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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    ;
mix.styles('resources/assets/template/css/responsive.css', 'public/assets/css/responsive.css');
mix.styles('resources/assets/template/css/style.css', 'public/assets/css/style.css');
mix.styles('resources/assets/template/css/style2.css', 'public/assets/css/style2.css');
mix.styles('resources/assets/template/css/owl.carousel.min.css', 'public/assets/css/owl.carousel.min.css');
mix.styles([
    'resources/assets/template/css/animate.css',
    'resources/assets/template/css/superfish.css',
], 'public/assets/css/effects.css');
mix.js([
    'resources/assets/template/js/appear-modal.js',
    'resources/assets/template/js/classie.js',
    'resources/assets/template/js/hoverIntent.js',
    'resources/assets/template/js/jquery.easing.1.3.js',
    'resources/assets/template/js/jquery.min.js',
    'resources/assets/template/js/jquery.stellar.min.js',
    'resources/assets/template/js/jquery.waypoints.min.js',
    'resources/assets/template/js/selectFx.js',
    'resources/assets/template/js/sticky.js',
], 'public/assets/js/all-js.js');
mix.js('resources/template/assets/js/main.js', 'public/assets/js/main.js');
mix.js('resources/template/assets/js/modernizr-2.6.2.min.js', 'public/assets/js/modernizr-2.6.2.min.js');
