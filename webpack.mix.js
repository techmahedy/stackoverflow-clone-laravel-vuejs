const mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js/app.js')
   .styles([
         'resources/assets/css/settings.css',
         'resources/assets/css/custom.css',
         'resources/assets/css/style.css'
      ], 'public/css/all.css')
   .sass('resources/assets/sass/app.scss', 'public/css/app.css')

