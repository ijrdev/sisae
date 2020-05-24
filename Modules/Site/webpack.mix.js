const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');
require('laravel-mix-copy-watched');

mix.setPublicPath('../../public').mergeManifest();

mix.copyDirectoryWatched(__dirname + '/Resources/assets/img', '../../public/img/site');

mix
    .scripts(__dirname + '/Resources/assets/js/jquery.mask.min.js', '../../public/js/site/jquery.mask.min.js')
    .scripts(__dirname + '/Resources/assets/js/main.js', '../../public/js/site/main.js')

    .styles(__dirname + '/Resources/assets/css/font.css', '../../public/css/site/font.css')
    .styles(__dirname + '/Resources/assets/css/style.css', '../../public/css/site/style.css')
.version();
