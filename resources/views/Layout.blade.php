<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield("title","Blog News")</title>

    </head>
    <body class="bg-green dark:bg-bg100">
         @yield("content")
    </body>
</html>
