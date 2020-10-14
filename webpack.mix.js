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
 
mix.js('public/js/chartjs/LineChart.js', 'public/js/chartjs.line_chart.js');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

/*
mix.scripts([

    'resources/js/bootstrap.js',
    'resources/js/dataTables.bootstrap4.min.js',
    'resources/js/datatables.min.js',
    'resources/js/jquery.dataTables.min.js',

'resources/js/app.js',


	],'public/js/app.js')

.styles([


'resources/css/cloudfare.css',
'resources/css/dataTables.bootstrap4.min.css',
'resources/css/nunito.css'


	]);

.sass('resources/sass/app.scss', 'public/css');
*/