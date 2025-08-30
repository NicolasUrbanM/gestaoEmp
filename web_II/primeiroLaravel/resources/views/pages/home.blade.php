<x-layout.app>

    <x-slot name="title">
        Pagina inicial
    </x-slot>

    <div>
    <div>
        <h1>Bem vindo ao nosso site</h1>
        <p>Este e um exemplo de pagina inicial contruida com componentes balde no laravel</p>
        <a href="{{ route('contact') }}" type="button" >entre em contato</a>
    </div>
    </div>

</x-layout.app>