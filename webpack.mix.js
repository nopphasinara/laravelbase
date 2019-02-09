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

// mix.js('resources/js/app.js', 'public/js');
// mix.sass('resources/sass/app.scss', 'public/css');
// Dashboard setup
mix.js('resources/js/vendor/dashboard/app.js', 'public/js/vendor/dashboard');
mix.sass('resources/sass/vendor/dashboard/app.scss', 'public/css/vendor/dashboard');
