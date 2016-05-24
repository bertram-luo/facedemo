var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss',
             './public/assets/css/app.css')
        .version('./public/assets/css/app.css')
        .scripts([
            'libs/sweetalert-dev.js',
            'libs/lity.js'
            ], './public/assets/js/libs.js')
        .styles( ['libs/sweetalert.css', 'libs/lity.css', 'libs/manuscript.css'], './public/assets/css/libs.css');
});
