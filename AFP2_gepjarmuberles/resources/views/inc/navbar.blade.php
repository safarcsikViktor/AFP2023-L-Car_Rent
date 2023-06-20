<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #E50914;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Request::route()->getName()==='home' ? 'active' : '' }}">Főoldal</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cars') }}" class="nav-link {{ Request::is('cars') ? 'active' : '' }}">Autókínálatunk</a>
            </li>
            @auth
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rentacar') }}" class="nav-link {{ Request::is('rentacar') ? 'active' : '' }}">Autóbérlés</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
