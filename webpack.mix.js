let mix = require('laravel-mix');

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
	.sass('resources/assets/sass/app.scss', 'public/css')
	// .scripts(['resources/assets/js/front.js'], 'public/js/main.js')
	.styles(
		[
			'resources/assets/css/fontastic.css',
			'resources/assets/css/style.default.css',
			'resources/assets/css/style.blue.css',
			'resources/assets/css/custom.css',
		],
		'public/css/theme.css'
	)
	.autoload({
		jquery: ['$', 'window.jQuery', 'jQuery', 'window.$', 'jquery', 'window.jquery'],
	});
