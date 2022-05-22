const mix = require('laravel-mix');
const glob = require('glob');

glob.sync('resources/sass/*.scss').map(function (file) {
		mix.sass(file, 'public/assets/css');
});

glob.sync('resources/js/*.js').map(function (file) {
		mix.js(file, 'public/assets/js');
});

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.scss/,
                loader: 'import-glob-loader'
            },
        ]
    }
})