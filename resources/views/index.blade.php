<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('js/favicon.ico') }}">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>

    <app-root></app-root>
    <script type="text/javascript" src="{{ asset('js/runtime.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/polyfills.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/styles.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
