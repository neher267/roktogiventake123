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
   .sass('resources/assets/sass/app.scss', 'public/css');

// .........Frontend resources.............//

mix.styles([	
	'resources/assets/css/theme/bootstrap.css',
	'resources/assets/css/theme/style.css',
	'resources/assets/css/theme/component.css',
	'resources/assets/css/theme/font-awesome.css',
], 'public/css/theme.css');

mix.scripts([
	'resources/assets/js/theme/jquery-1.11.1.min.js',
	'resources/assets/js/theme/modernizr.custom.js',
], 'public/js/theme.head.js');

mix.scripts([
	'resources/assets/js/theme/numscroller-1.0.js',
	'resources/assets/js/theme/bootstrap.js',
], 'public/js/theme.foot.js');
