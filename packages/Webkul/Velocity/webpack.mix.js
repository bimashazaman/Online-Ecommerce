const { mix } = require('laravel-mix');

require('laravel-mix-merge-manifest');

let publicPath = '../../../public/themes/velocity/assets';

if (mix.inProduction()) {
    publicPath = 'publishable/assets';
}

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix
    .js(__dirname + '/src/Resources/assets/js/app-core.js', 'js/velocity-core.js')
    .js(
        __dirname + '/src/Resources/assets/js/app.js',
        'js/velocity.js'
    )

    .copy(__dirname + '/src/Resources/assets/images', publicPath + '/images')

    .sass(
        __dirname + '/src/Resources/assets/sass/admin.scss',
        __dirname + '/' + publicPath + '/css/velocity-admin.css'
    )
    .sass(
        __dirname + '/src/Resources/assets/sass/app.scss',
        __dirname + '/' + publicPath + '/css/velocity.css',
        {
            includePaths: ['node_modules/bootstrap-sass/assets/stylesheets/']
        }
    )

    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}
