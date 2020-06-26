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

mix.sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/index.scss', 'public/css/index.css')
   .sass('resources/sass/admin/header.scss', 'public/css/admin/header.css')
   .sass('resources/sass/admin/sidebar.scss', 'public/css/admin/sidebar.css')
   .sass('resources/sass/admin/main.scss', 'public/css/admin/main.css');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/common.js', 'public/js/common.js')
   .js('resources/js/handle_datatables.js', 'public/js/handle_datatables.js');

mix.copyDirectory('resources/img', 'public/img');