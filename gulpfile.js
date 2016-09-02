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
    mix.sass('main.scss');
    mix.scripts([
		'vendor/modernizr-2.8.3.min.js',
		'vendor/bootstrap.min.js',
		'bootstrap-datepicker.js',
		'vendor/owl.carousel.min.js',
		'plugins.js'
    	], 'public/js/main.js');
});



