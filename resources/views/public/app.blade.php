<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Aljo Victor Gabot" />
        <meta name="description" content="Autism Social">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <title>Autism Social</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ elixir( 'css/app-all.css' ) }}"/>

    </head>
    <body>
        @section( 'header' )
            @include( 'public.blocks.header' )
        @stop
        @yield( 'navigation' )

        @yield( 'content' )


        <script type="text/javascript" src="{{ elixir( 'js/app-libs.js' ) }}"></script>
        <script type="text/javascript" src="{{ elixir( 'js/app-code.js' ) }}"></script>
        @yield( 'scripts' )
    </body>
</html>