<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles -->
        @Vite(['resources/scss/app.scss'])
    </head>

    <body>
        <div id="app">
            <h1>BRASIL CONDO ESTÁ ONLINE!</h1>
        </div>

        <!-- Scripts -->
        @Vite(['resources/js/app.js'])
    </body>

</html>
