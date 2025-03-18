<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>

    <!-- Bootstrap -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        @include('Partials.header')
    </header>

    <main>
        @yield('pageContent')
    </main>

    <footer>
        @include('Partials.footer')
    </footer>
</body>

</html>