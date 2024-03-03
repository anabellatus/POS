<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User POS Page</title>

    </head>
    <body>
        <h2>Hello, {{ $name }}</h2>
        <h2>with id number {{ $id }}</h2>
    </body>
</html>
