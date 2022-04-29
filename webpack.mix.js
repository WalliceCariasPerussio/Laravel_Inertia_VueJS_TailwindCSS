const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
]).vue({version: 3})
.tailwind()
.browserSync('http://localhost:81');
