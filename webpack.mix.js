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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css')
//     ;
mix.styles('resources/assets/css/responsive.css', 'public/assets/css/responsive.css');
mix.styles('resources/assets/css/style.css', 'public/assets/css/style.css');
mix.styles('resources/assets/css/style2.css', 'public/assets/css/style2.css');
// mix.styles('resources/assets/css/owl.carousel.min.css', 'public/assets/css/owl.carousel.min.css');
mix.styles([
    'resources/assets/css/animate.css',
    'resources/assets/css/superfish.css',
], 'public/assets/css/effects.css');
// mix.js([
//     'resources/assets/js/appear-modal.js',
//     'resources/assets/js/classie.js',
//     'resources/assets/js/hoverIntent.js',
//     'resources/assets/js/jquery.easing.1.3.js',
//     'resources/assets/js/jquery.min.js',
//     'resources/assets/js/jquery.stellar.min.js',
//     'resources/assets/js/jquery.waypoints.min.js',
//     'resources/assets/js/selectFx.js',
//     'resources/assets/js/sticky.js',
// ], 'public/assets/js/all-js.js');
// mix.js('resources/assets/js/main.js', 'public/assets/js/main.js');
// mix.js('resources/assets/js/modernizr-2.6.2.min.js', 'public/assets/js/modernizr-2.6.2.min.js');
