<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brasil Condo | @yield('title', 'Dashboard')</title>

        {{-- 1. Carrega CSS (Bootstrap e AdminLTE) via Vite --}}
        @vite([
            'resources/scss/app.scss',
            'node_modules/admin-lte/dist/css/adminlte.min.css',
        ])
        
        {{-- 2. ESSENCIAL: Font Awesome para os ícones --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        
        @yield('styles')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('layouts.partials.header')
            @include('layouts.partials.sidebar')
            
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('page_title', 'Início')</h1>
                            </div>
                            <div class="col-sm-6">
                                @yield('breadcrumb')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            
            @include('layouts.partials.footer')
        </div>

        {{-- 1. ESSENCIAL: JQuery (Carregado antes do @vite) --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        {{-- 2. Carrega Scripts (app.js e adminlte.min.js) via Vite --}}
        @vite([
            'resources/js/app.js',
            'node_modules/admin-lte/dist/js/adminlte.min.js',
        ])

        @yield('scripts')

    </body>
</html>
