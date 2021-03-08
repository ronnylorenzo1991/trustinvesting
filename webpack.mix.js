const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [
            require('postcss-import'),
            require('tailwindcss'),
        ]
    });

cssPaths = [
    'resources/css/tailwind.min.css',
    'resources/css/bootstrap-image-checkbox.min.css',
]
jsPath = [
    'resources/plugins/smooth/dist/smooth-scroll.js',
]

mix.styles(cssPaths, 'public/css/all.css');
mix.scripts(jsPath, 'public/js/all.js');

if (mix.inProduction()) {
    mix.version();
}
