<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')

</head>
<body>
    <!-- HEADER -->
    @include('partials.header') 

    <!-- Area per il contenuto specifico della pagina -->
    @yield('content') 
    
    <!-- Includi il footer -->
    @include('partials.footer') 
</body>
</html>