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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('resources/assets/admin/css', 'public/admin/css')
   .copy('resources/assets/admin/images', 'public/admin/images')
   .copy('resources/assets/admin/js', 'public/admin/js')

   .copyDirectory('resources/assets/js', 'public/js')
   .copyDirectory('resources/assets/css', 'public/css')
   .copyDirectory('resources/assets/images/', 'public/images')
   .copyDirectory('resources/assets/fonts/', 'public/fonts');
