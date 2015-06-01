var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.babel.enabled = false;

elixir(
    function( mix ) {

        mix.styles(
            [
                'bootstrap.min.css',
                'style.css',
                'bootstrap-social.css',
                //'royal_preloader.css',
                'animate.min.css',
                'owl.carousel.css',
                'jquery.snippet.css',
                'buttons.css',
                'ionicons.min.css',
                'font-awesome.css',
                'magnific-popup.css'
            ],
            'public/css/app-all.css'
        );

        mix.scripts(
            [
                'libs/jquery.2.1.3.js',
                //'libs/royal_preloader.min.js',
                'libs/bootstrap.min.js',
                'libs/hover-dropdown.js',
                'libs/jquery.easing.min.js',
                'libs/jquery.mixitup.min.js',
                'libs/scrollReveal.js',
                'libs/owl.carousel.min.js',
                'libs/jquery.magnific-popup.min.js',
                'libs/jquery.snippet.min.js',
                'libs/jquery.fitvids.js',
                'libs/activate-snippet.js',
                'libs/skrollr.min.js',
            ],
            'public/js/app-libs.js'
        );

        mix.scripts(
            [
                'libs/lazyload.js',
                'libs/jquery.gritter.min.js',
                'libs/jquery.form.js',
                'libs/humanmsg.js',
                'core/global.js',
                'core/tools.js',
                'libs/config.js',
                'libs/main.js',
            ],
            'public/js/app-code.js'
        );

        mix.version( [ 'public/css/app-all.css', 'public/js/app-libs.js', 'public/js/app-code.js' ] );

    }
);
