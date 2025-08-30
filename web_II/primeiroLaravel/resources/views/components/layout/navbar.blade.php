<nav>
    <div>
        <a href="{{ route('index') }}">Logo App</a>
        <button>
            <span></span>
        </button>
        <div>
            <ul>
                <li>
                    <a class="nav-link {{  request()->route('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                </li>
                <li>
                    <a class="nav-link {{ request()->route('about') ? 'active' : '' }}" href="{{ route('about') }}">Sobre nos</a>
                </li>
                <li>
                    <a class="nav-link {{ request()->route('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>