const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// mix.setPublicPath('public');
// mix.setResourceRoot('../');

mix.autoload({
    jQuery: 'jquery',
    $: 'jquery',
    jquery: 'jquery'
});