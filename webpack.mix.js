const mix = require('laravel-mix');

mix
    .scripts('resources/js/jquery.mask.min.js', 'public/js/jquery.mask.min.js')
    .scripts('resources/js/jquery.bootstrap-growl.min.js', 'public/js/jquery.bootstrap-growl.min.js')
    .scripts('resources/js/all.js', 'public/js/all.js')
.version();
