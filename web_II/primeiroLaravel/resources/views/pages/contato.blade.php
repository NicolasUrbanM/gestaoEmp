<div>
    <div>
            <ul>
                <li>
                    <a class="nav-link {{  request()->route('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                </li>
                <li>
                    <a class="nav-link {{ request()->route('about') ? 'active' : '' }}" href="{{ route('about') }}">Sobre nos</a>
                </li>
            </ul>
        </div>
</div>

@if(empty($contatinhos))
    <p>nenhum contato salvo</p>

@else 
    <ul>
    @foreach  ($contatinhos as $contatinho) 
      <li> {{ $contatinho }} </li>
    @endforeach
</ul>
@endif

<!--
<ul>
    @forelse ($contatinhos as $contatinho) 
        <li> {{ $contatinho }} </li>
    @empty
        <p> nenhum contato salvo </p>

    @endforelse 
</ul>
 -->
