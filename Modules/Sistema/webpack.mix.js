const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');
require('laravel-mix-copy-watched');

mix.setPublicPath('../../public').mergeManifest();

mix.copyDirectoryWatched(__dirname + '/Resources/assets/img', '../../public/img/sistema');

mix
    .scripts(__dirname + '/Resources/assets/js/jquery.mask.min.js', '../../public/js/sistema/jquery.mask.min.js')
    .scripts(__dirname + '/Resources/assets/js/app.js', '../../public/js/sistema/app.js')

    .styles(__dirname + '/Resources/assets/css/main.css', '../../public/css/sistema/main.css')

    .version();
