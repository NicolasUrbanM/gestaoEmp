<div>
    <ul>
        <li>
            <a class="nav-link {{  request()->route('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
        </li>
        <li>
            <a class="nav-link {{ request()->route('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contato</a>
        </li>
    </ul>
</div>



<h1>Nao temos nada sobre nos</h1>