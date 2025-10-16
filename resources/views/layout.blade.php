<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo', 'Meu site - padrão')
    </title>
</head>
<body>
    <header>
        <a href="{{ Route('home_page') }}">Home</a> |
        <a href="{{ Route('services_page') }}">Serviços</a> |
        <a href="{{ Route('contact_page') }}">Contato</a>
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
    <hr>
    <footer>
        @includeWhen($mostraRodape ?? false, 'footer')
    </footer>
</body>
</html>