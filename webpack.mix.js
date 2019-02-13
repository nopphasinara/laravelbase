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

// Frontend
// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');


// Dashboard
mix.js('resource/vendor/dashboard/js/app.js', 'public/vendor/dashboard/js')
   .sass('resources/vendor/dashboard/scss/app.scss', 'public/vendor/dashboard/css');



// mix.js('resources/dashboard/js/bootstrap.js', 'public/dashboard/js');
// mix.sass('resources/dashboard/sass/bootstrap.scss', 'public/dashboard/css');

// mix.js('resources/vendor/dashboard/js/bootstrap.js', 'public/vendor/ui/js');
// mix.sass('resources/views/vendor/ui/sass/bootstrap.scss', 'public/vendor/ui/css');

// mix.js('resources/vendor/dashboard/js/app.js', 'public/vendor/dashboard/js')
//    .sass('resources/vendor/dashboard/sass/app.scss', 'public/vendor/dashboard/css');
