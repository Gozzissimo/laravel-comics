<header>
    <nav class="container flex">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
            </a>
        </div>
        <ul class="flex">
            <li class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('characters') }}">characters</a>
            </li>
            <li class="{{ 'comics' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('comics') }}">comics</a>
            </li>
            <li class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('movies') }}">movies</a>
            </li>
            <li class="{{ 'tv' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('tv') }}">tv</a>
            </li>
            <li class="{{ 'games' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('games') }}">games</a>
            </li>
            <li class="{{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('collectibles') }}">collectibles</a>
            </li>
            <li class="{{ 'videos' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('videos') }}">videos</a>
            </li>
            <li class="{{ 'fans' === Route::currentRouteName() ? 'active' : '' }}" >
                <a href="{{ route('fans') }}">fans</a>
            </li>
            <li class="{{ 'news' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('news') }}">news</a>
            </li>
            <li class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}">
                <a href="{{ route('shop') }}">shop</a>
            </li>
        </ul>
    </nav>
</header>