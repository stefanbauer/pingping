let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix
    .js('resources/assets/js/app.js', 'public/js')
    .less('resources/assets/less/app.less', 'public/css')
    .options({
        postCss: [
            tailwindcss('tailwind.js'),
        ]
    })
;

if (mix.inProduction()) {
    mix.version();
}
