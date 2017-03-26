const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix){
    mix.sass('app.scss')


        .styles([
            'bootstrap.min.css',
            'metisMenu.min.css',
            'timeline.css',
            'startmin.css',
            'morris.css',
            'font-awesome.min.css'


        ],'./public/css/main.css')


        .scripts([
            'jquery.min.js',
            'bootstrap.min.js',
            'metisMenu.min.js',
            'startmin.js'

        ],'./public/js/main.js')
});