<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OZEZ - Tienda de Playeras')</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, .bebas {
            font-family: 'Bebas Neue', cursive;
        }
    </style>
</head>
<body>
@include('partials.nav')
<div class="content">
    @yield('content')
</div>
@include('partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
