<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Platinum</title>
        @stack('stylesheets')
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/uiStyle.css')}}">

        @if(Route::currentRouteName() == 'inner')
            <meta property="og:title" content="{{ getPropByLang($product->manufacturer, 'name').' '.getPropByLang($product->models, 'name') }}"/>
            <meta property="og:type" content="article"/>
            <meta property="og:image" content="{{ $product->main_image }}"/>
            <meta property="og:site_name" content="Plationum"/>
            <meta property="og:description" content="{{ getPropByLang($product, 'desc') }}"/>
        @endif
    </head>
    <body>
        <div class="body">
            @include('ui/includes/header')
            @yield('main_container')
            @include('ui/includes/footer')
        </div>
        @stack('scripts')
    </body>
</html>