<header>
    <h1><a href="/"> Videogames </a></h1>
    <div class="flex-center full-height">
        @if (Route::has('login'))
            <div class="links">
                @auth
                    <div class="user">
                        <h2>Hello {{Auth::user() -> name}}</h2>
                        <a href="{{ route('logout') }}">Logout</a>
                    </div>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
    </div>
</header>
