<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app() -> getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Site Laravel' }}</title>

    @vite (['resources/css/app.css', 'resources/js/app.js'])
    

</head>
<body class ="bg-light">

    <x-layout.navbar />

    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <button class="btn btn-primary btn-lg" type="button">
            Botao de exemplo
        </button>
    </div>

    <main class="container my-5">
        {{$slot}}
    </main>
    
    <x-layout.footer />

</body>
</html>