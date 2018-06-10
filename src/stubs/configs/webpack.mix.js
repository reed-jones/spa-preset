let mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        alias: {
            "@": path.resolve(__dirname, 'resources', 'assets', 'js')
        }
    }
})

mix.js('resources/assets/js/main.js', 'public/js')
//  .sass('resources/assets/sass/app.scss', 'public/css');
