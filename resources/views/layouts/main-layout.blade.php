<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('meta_description', 'Jakub Holík - Main Page')">
        <title>Jakub Holík</title>
        @vite(['resources/css/skeleton.css'])
    </head>

    <body>
        @include('partials.nav')
        @include('partials.sidenav')
        @yield('body')
        @include('partials.footer')
    </body>

</html>
