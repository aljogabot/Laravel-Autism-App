<?php

    Breadcrumbs::register(
        '/',
        function( $breadcrumbs ) {
            $breadcrumbs->push( 'Home', route( '/' ) );
        }
    );

    Breadcrumbs::register(
        'contact',
        function( $breadcrumbs ) {
            $breadcrumbs->parent( '/' );
            $breadcrumbs->push( 'Contact Us', route( 'contact' ) );
        }
    );

    Breadcrumbs::register(
        'auth.register',
        function( $breadcrumbs ) {
            $breadcrumbs->parent( '/' );
            $breadcrumbs->push( 'Register', route( 'auth.register' ) );
        }
    );

    Breadcrumbs::register(
        'password.email',
        function( $breadcrumbs ) {
            $breadcrumbs->parent( '/' );
            $breadcrumbs->push( 'Password Email', route( 'password.email' ) );
        }
    );

    Breadcrumbs::register(
        'timeline.index',
        function( $breadcrumbs ) {
            $breadcrumbs->parent( '/' );
            $breadcrumbs->push( 'Timeline', route( 'timeline.index' ) );
        }
    );

    Breadcrumbs::register(
        'user',
        function( $breadcrumbs ) {
            $breadcrumbs->parent( '/' );
            $breadcrumbs->push( 'User', route( 'user' ) );
        }
    );

    Breadcrumbs::register(
        'user.profile',
        function( $breadcrumbs ) {
            $breadcrumbs->parent( 'user' );
            $breadcrumbs->push( 'User Profile', route( 'user.profile' ) );
        }
    );