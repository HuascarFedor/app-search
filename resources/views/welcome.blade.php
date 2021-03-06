<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <livewire:styles />
    </head>
    <body>
        <div class="container mx-auto p-4 w-full lg:w-1/2">
            <livewire:search />
        </div>

        <livewire:scripts />
    </body>
</html>
