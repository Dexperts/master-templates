const mix = require('laravel-mix')

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

mix.sass(
    './scss/master-templates.scss',
    './assets/css/master-templates.css'
).copy(
    './assets/css/master-templates.css',
    './../../../../public/vendor/master-templates/css/master-templates.css'
)
