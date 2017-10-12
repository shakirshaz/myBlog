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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');


//SASS TO CSS
mix.sass('resources/assets/sass/login/login.scss', 'public/css/login');
mix.sass('resources/assets/sass/register/register.scss', 'public/css/register');
mix.sass('resources/assets/sass/common/common.scss', 'public/css/common');
mix.sass('resources/assets/sass/resetEmail/resetEmail.scss', 'public/css/resetEmail');

//JS MINIMIZED TO PUBLIC
mix.js('resources/assets/js/login/login.js', 'public/js/login');
mix.js('resources/assets/js/register/register.js', 'public/js/register');

//COMPILING ALL CSS TO ONE SINGLE CSS
mix.styles([
    'public/css/login/login.css',
    'public/css/register/register.css',
    'public/css/common/common.css',
    'public/css/resetEmail/resetEmail.css'
], 'public/css/main.css');


//COMPILING ALL JS TO ONE SINGLE JS
mix.scripts([
    'public/js/login/login.js',
    'public/js/register/register.js'
], 'public/js/main.js');