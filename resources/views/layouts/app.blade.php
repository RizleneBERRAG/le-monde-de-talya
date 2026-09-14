<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <meta
        name="description"
        content="@yield('meta_description', 'Le Monde de Talya, élevage familial de Maine Coons situé en Isère.')"
    >

    <title>@yield('title', 'Le Monde de Talya')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
@include('partials.header')

@yield('content')

@include('partials.footer')
</body>
</html>
