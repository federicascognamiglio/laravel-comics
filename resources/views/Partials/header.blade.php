<nav class="navbar d-flex align-center">
    <div class="container">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo" class="nav-logo">
        <ul class="d-flex g-20">
            <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
            <li><a href="{{ route('comics') }}">COMICS</a></li>
            <li><a href="{{ route('movies') }}">MOVIES</a></li>
            <li><a href="{{ route('games') }}">GAMES</a></li>
            <li><a href="{{ route('shop') }}">SHOP</a></li>
        </ul>
    </div>
</nav>