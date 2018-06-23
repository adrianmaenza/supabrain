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

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
            })
        ]
    };
});


mix.setPublicPath('public_html')
   .copy('resources/assets/css/main.css', 'public_html/css')
   .copy('node_modules/vuetify/dist/vuetify.min.css', 'public_html/css')
   .js('resources/assets/js/app.js', 'js')
   .sass('resources/assets/sass/app.scss', 'css');
